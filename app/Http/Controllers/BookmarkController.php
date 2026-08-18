<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
// use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index(): View {
        $user = Auth::user();

        $bookmarks = $user->bookmarkedJobs()->paginate(3);

        return view('jobs.bookmarks')->with('bookmarks', $bookmarks);
    }

}
