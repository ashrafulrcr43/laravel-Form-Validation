<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidation extends Controller
{
    public function checkValidation(Request $request){
        $validation =$request->validate([
            'name'=>'required|min:3|max:10|not_in:admin,password',
            'email'=>'required|email',
            'price'=>'between:10,100|numeric',
        ]);

        return redirect(route('form.get'))->with([
            'Success'=> 'Form submitted successfully'
        ]);
    }
}
