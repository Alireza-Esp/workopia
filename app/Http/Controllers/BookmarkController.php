<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Job;

class BookmarkController extends Controller
{
    public function index(): View {
        $user = Auth::user();

        $bookmarks = $user->bookmarkedJobs()->orderByDesc('job_user_bookmarks.created_at')->paginate(6);

        return view('jobs.bookmarks')->with('bookmarks', $bookmarks);
    }

    public function store(Job $job): RedirectResponse {
        $user = Auth::user();

        if ($user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return back()->with('error', 'Job is already bookmarked');
        }

        $user->bookmarkedJobs()->attach($job->id);

        return back()->with('success', 'Job bookmarked successfully!');
    }

    public function destroy(Job $job): RedirectResponse {
        $user = Auth::user();

        if (!$user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return back()->with('error', 'Job is not already bookmarked');
        }

        $user->bookmarkedJobs()->detach($job->id);

        return back()->with('success', 'Bookmark removed successfully!');
    }

}
