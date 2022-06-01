<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPost extends Controller
{
    function showAllPosts()
    {
        // get all post from db 
        $allPosts = DB::table("posts")->orderBy("id", "desc")->get();
        return view("admin/all-posts")->with("allPosts", $allPosts);
    }


    function showDashboard()
    {
        // get 5 posts from db 
        $allRecentPosts = DB::table("posts")->orderBy("id", "desc")->take(5)->get();
        $totalPostNum = DB::table("posts")->count("id");
        $publishedPosts = DB::table("posts")->where("status", 1)->count();
        $draftPostsNum = $totalPostNum - $publishedPosts;
        $totalmessage = DB::table('contacts')->count('id');

        return view("admin/index")->with(["totalmessage"=>$totalmessage,"publishedPosts" => $publishedPosts, "draftPostsNum" => $draftPostsNum, "totalPostNum" => $totalPostNum, "allPosts" => $allRecentPosts]);
    }

    // add post in db 
    function addNewPost(Request $request)
    {
        $request->validate([
            'title' => "required|max:100",
            'slug' => "required|max:100|unique:posts",
            'short_desc' => "required|max:150",
            'long_desc' => "required",
            'image' => "required|mimes:jpeg,jpg,webp,png,gif",
        ]);

        $image = $request->file("image"); // get the form image
        $imgExtension = $image->extension(); // get extension
        $fileWithExtension =  time() . "." . $imgExtension; // random name 
        $image->storeAs("/public/blogs-images", $fileWithExtension); // storage path

        if ($request->input("status") == "on") {
            $status = 1;
        } else {
            $status = 0;
        }

        $postData = array(
            'title' => $request->input("title"),
            'slug' => $request->input("slug"),
            'short_desc' => $request->input("short_desc"),
            'long_desc' => $request->input("long_desc"),
            'post_date' => $request->input("post_date"),
            'image' => $fileWithExtension,
            'status' => $status
        );

        $res = DB::table("posts")->insert($postData);
        return view("/admin/add-post")->with("success", $res);
    }


    // delete post by id 
    function deletePost($id)
    {
        $deleted =  DB::table("posts")->delete($id);
        if ($deleted) {
            return redirect()->back();
        }
    }

    // get the post details 
    function getEditPost($id)
    {
        $singlePost = DB::table("posts")->where('id', $id)->get();
        return view('/admin/edit-post')->with("singlePost", $singlePost);
    }

    // update the post in db 
    function saveEditPost(Request $request)
    {
        $request->validate([
            'title' => "required|max:100",
            'slug' => "required|max:100",
            'short_desc' => "required|max:150",
            'long_desc' => "required",
            'image' => "mimes:jpeg,jpg,webp,png,gif",
        ]);

        $id = $request->input('post_id');

        // get the id for update 
        if ($request->input("status") == "on") {
            $status = 1;
        } else {
            $status = 0;
        }

        $postData = array(
            'title' => $request->input("title"),
            'slug' => $request->input("slug"),
            'short_desc' => $request->input("short_desc"),
            'long_desc' => $request->input("long_desc"),
            'post_date' => $request->input("post_date"),
            'status' => $status
        );

        // if image uploaded 
        if ($request->hasFile("image")) {
            $image = $request->file("image"); // get the form image
            $imgExtension = $image->extension(); // get extension
            $fileWithExtension =  time() . "." . $imgExtension; // random name 
            $image->storeAs("/public/blogs-images", $fileWithExtension); // storage path

            // add to array 
            $postData['image'] = $fileWithExtension;
        }

        $res = DB::table("posts")->where('id', $id)->update($postData);
        // redirecting to controller 
        if ($res)
            return redirect()->action([AdminPost::class, "showAllPosts"]);
        else
            return redirect()->back();
    }
}
