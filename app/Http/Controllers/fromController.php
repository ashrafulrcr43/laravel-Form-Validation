<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class fromController extends Controller
{
    public function contact(){
        $name = 'jon';
        $email = 'k7h2I@example.com';

        return view('form.contact', compact('name', 'email'));
    }
    public function formHandle(Request $request){
        // dd($request->all());

        $name = $request->input('name');
        $email = $request->input('email');
        $path ="";
        $request->validate([
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if($request->has('profile_picture')){
            $file = $request->file('profile_picture');
            $name = $file->getClientOriginalName();
            $uploadsFile= $file->storeAs('uploads', $name,'public');
            $path = Storage::url($uploadsFile);
        }
       
        // return [
        //     'name' => $name,
        //     'email' => $email
        // ];

        return redirect(route('form.get'))->with([
            // 'name' => $name,
            // 'email' => $email,
            'Success'=> 'Form submitted successfully',
            'profile_picture' => $path

        ]);

    // return redirect(route('form.get'))->witherror('Wrong Data');

              
    }


    }

