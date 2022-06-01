<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminPage extends Controller
{
    // get all page from db 
    function showAllPages()
    {
        $allPages = DB::table("pages")->orderBy("id", "desc")->get();
        return view("admin/all-pages")->with("allPages", $allPages);
    }

    // get all page from db 
    public static function getCustomPages()
    {
        $allCustomPages = DB::table("pages")->orderBy("id", "desc")->get();
        return  $allCustomPages;
    }


    // get single custom page details from database 
    function getSingleCustomPage($slug){
        $singleCustomPages = DB::table("pages")->where('slug',$slug)->get();
        return view('blog/page')->with('singleCustomPages',$singleCustomPages);
    }

    // get 5 pages from db 
    function showRecentPages()
    {
        $allRecentPages = DB::table("pages")->orderBy("id", "desc")->take(5)->get();
        return view("admin/index")->with("allPages", $allRecentPages);
    }

    // add page in db 
    function addNewPage(Request $request)
    {
        $request->validate([
            'name' => "required|max:20",
            'slug' => "required|unique:pages",
            'title' => "required",
            'description' => "required",
        ]);

        if ($request->input("status") == "on") {
            $status = 1;
        } else {
            $status = 0;
        }

        $pageData = array(
            'name' => $request->input("name"),
            'slug' => $request->input("slug"),
            'title' => $request->input("title"),
            'description' => $request->input("description"),
            'status' => $status
        );

        if ($request->input("page_date"))
            $pageData['page_date'] = $request->input("page_date");

        $res = DB::table("pages")->insert($pageData);
        return view("/admin/add-page")->with("success", $res);
    }

    // delete page by id 
    function deletePage($id)
    {
        $deleted =  DB::table("pages")->delete($id);
        if ($deleted) {
            return redirect()->back();
        }
    }

    // get the page details 
    function getEditPage($id)
    {
        $singlePage = DB::table("pages")->where('id', $id)->get();
        return view('/admin/edit-page')->with("singlePage", $singlePage);
    }

    // update the page in db 
    function saveEditpage(Request $request)
    {
        $request->validate([
            'name' => "required|max:20",
            'slug' => "required",
            'title' => "required",
            'description' => "required",
        ]);

        // get the is for update 
        $id = $request->input('page_id');

        if ($request->input("status") == "on") {
            $status = 1;
        } else {
            $status = 0;
        }

        $pageData = array(
            'name' => $request->input("name"),
            'slug' => $request->input("slug"),
            'title' => $request->input("title"),
            'description' => $request->input("description"),
            'page_date' => $request->input("page_date"),
            'status' => $status
        );

        $res = DB::table("pages")->where('id', $id)->update($pageData);
        // redirecting to controller 
        if ($res)
            return redirect()->action([AdminPage::class, "showAllPages"]);
    }
}
