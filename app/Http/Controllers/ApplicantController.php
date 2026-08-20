<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function store(Request $request, Job $job): RedirectResponse {
        $existingApplication = Applicant::where('job_id', $job->id)->where('user_id', auth()->user()->id)->exists();

        if ($existingApplication) {
            return redirect()->back()->with('error', 'You have already applied to this job');
        }

        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'contact_phone' => 'string',
            'contact_email' => 'required|string|email',
            'message' => 'string',
            'location' => 'string',
            'resume' => 'required|file|mimes:pdf'
        ]);

        if ($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes', 'public');
            $validatedData['resume_path'] = $path;
        }

        $applicant = new Applicant($validatedData);
        $applicant->job_id = $job->id;
        $applicant->user_id = auth()->user()->id;
        $applicant->save();

        return redirect()->back()->with('success', 'Your application submitted successfully');
    }

    public function destroy($id): RedirectResponse {
        $applicant = Applicant::findOrFail($id);
        $applicant->delete();
        return redirect()->route('dashboard')->with('success', 'Applicant deleted successfully');
    }
}
