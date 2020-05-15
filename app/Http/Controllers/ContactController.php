<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:3',
            'fullname' => 'required',
            'email' => 'required|email'
        ]);

        //return $request->all();
        //return $request->get('email');
        //return request('email'); // without Request Injection
        return 'Pasó la validación';

    }
}
