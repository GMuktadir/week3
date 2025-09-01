<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function submit(Request $request)
    {
        $imagePath=null;
        if( $request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $cookie = Cookie::make('file_uploaded', 'true', 60);
        }
        // Validate the form data

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|max:20',
            'message' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048' // Validate image file 
        ]);
        //store data in session
        $request->session()->put(['name' => $request->input('name'),
                                  'email' => $request->input('email'),
                                  'phone' => $request->input('phone'),
                                  'message' => $request->input('message'),
                                  'image' => $imagePath]);
        
        return response()->view('submit')->withCookie($cookie ?? null);
        
    }
}
