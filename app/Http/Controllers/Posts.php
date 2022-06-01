<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Posts extends Controller
{

    // show all post from database
    function getAllPosts()
    {
        $allPosts = DB::table('posts')->get(['title','slug']);
        return view('blog/index')->with('allPosts', $allPosts);
    }

    // for the post page 
    function allPostWithSinglePost($slug)
    {
        // for the sidebar 
        $allPosts = DB::table('posts')->get();
        // for the post details 
        $singlePost = DB::table('posts')->where('slug', $slug)->get();
        return view('blog/post')->with(['allPosts' => $allPosts, 'singlePost' => $singlePost]);
    }

    // show all pages 
    function showAllPages()
    {
        $Pages = DB::table("pages")->get();
        return $Pages;
    }
}
