<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Contacts extends Controller
{
    function showContacts()
    {
        $allContacts =  DB::table("contacts")->orderBy("id", "desc")->get();
        return view("/admin/contacts")->with('allContacts', $allContacts);
    }

    function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => 'email|required',
            'mobile' => 'numeric|required',
            'message' => 'required',
        ]);

        $contactData = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'message' => $request->input('message')
        );

        $res = DB::table('contacts')->insert($contactData);

        return view('blog/contact')->with("res", $res);
    }
}
