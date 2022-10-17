<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sitioController extends Controller
{
    public function landingpage(){
        return view('landingpage');
    }

    public function contacto($codigo_id = null)
    {
        if ($codigo_id == '1234'){
            $name = "carlos perez";
            $email = "carlos@test.com";
        }
        else{
            $name = null;
            $email = null;
        }
        return view('contacto', compact('name','email'));
    }

    public function inforeciver(Request $request){
       $request->validate([
        'name' => 'required|max:255|min:3',
        'email' => ['required','email'],
        'comentario' => 'required',
       ]);
    }
}