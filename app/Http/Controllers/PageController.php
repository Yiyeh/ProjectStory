<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Story;
use App\Segment;

class PageController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate();
        $stories = Story::orderBy('id', 'ASC')->where('status','PUBLISHED')->paginate();

        $totalUsers = User::count();
        $storiesPublished = Story::get()->where('status','PUBLISHED');
        $totalStories = count($storiesPublished);

        return view('user.story.index', compact('users','stories','totalStories','totalUsers')); 
    }
}
