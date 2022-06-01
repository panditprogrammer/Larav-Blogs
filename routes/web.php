<?php

use App\Http\Controllers\AdminAuth;
use App\Http\Controllers\AdminPage;
use App\Http\Controllers\AdminPost;
use App\Http\Controllers\Contacts;
use App\Http\Controllers\Posts;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// index page
Route::get('/', [Posts::class,"getAllPosts"]);

// post details page 
Route::get('/post/{slug}',[Posts::class,"allPostWithSinglePost"] );

// about Page 
Route::get('/about', function () {
    return view('blog.about');
});

//---------------------- contact page ----------------------------- 
Route::get('/contact', function () {
    return view('blog.contact');
});

Route::post('/contact',[Contacts::class,"submitContact"]);


// ------------------------------- show custom page --------------------- 
Route::get('/page/{slug}',[AdminPage::class,"getSingleCustomPage"]);



// --------------------------  admin ---------------------------------
Route::get("/admin/signin", function(){
    return view("admin.signin");
});
Route::get("/admin/signup", function(){
    return view("admin.signup");
});

// signup by post method 
Route::post("/admin/signup", [AdminAuth::class,"signup"]);
// sign in 
Route::post("/admin-auth", [AdminAuth::class, "signin"]);
// log out 
Route::get("/admin/logout", function () {
    Session::forget("BLOG_USER_ID");
    return redirect("/admin/signin");
});



//--------------------- admin middleware group for authentication ------------
Route::group(["middleware" => ['admin_auth']], function () {
    // show all recent posts 
    Route::get("/admin", [AdminPost::class,"showDashboard"]);

    // show all posts 
    Route::get("/admin/all-posts", [AdminPost::class, "showAllPosts"]);
    // return only view 
    Route::get("/admin/add-post", function(){
        return view("/admin/add-post");
    });
    // add new post 
    Route::post("/admin/add-post", [AdminPost::class,"addNewPost"]);
    // delete the post 
    Route::get("/admin/delete-post/{id}",[AdminPost::class,"deletePost"]);
    // get the details for edit post 
    Route::get("/admin/edit-post/{id}",[AdminPost::class,"getEditPost"]);
    // edit the post by post method 
    Route::post("/admin/edit-post/",[AdminPost::class,"saveEditPost"]);



    //----------------------- Admin pages routs ----------------------
     // show all posts 
     Route::get("/admin/pages", [AdminPage::class, "showAllPages"]);
     // return only view 
     Route::get("/admin/add-page", function(){
         return view("/admin/add-page");
     });
     // add new post 
     Route::post("/admin/add-page", [AdminPage::class,"addNewPage"]);
     // delete the post 
     Route::get("/admin/delete-page/{id}",[AdminPage::class,"deletePage"]);
     // get the details for edit post 
     Route::get("/admin/edit-page/{id}",[AdminPage::class,"getEditPage"]);
     // edit the post by post method 
     Route::post("/admin/edit-page/",[AdminPage::class,"saveEditPage"]);

    //  contact 
     Route::get("/admin/contacts",[Contacts::class,"showContacts"]);
 
});
