<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image'))
        {
            User::uploadAvatar($request->image);

            return redirect()->back()->with('message', 'Image uploaded');
        }

             return redirect()->back()->with('error', 'Image not uploaded');
    }

    public function index()
      
    {
       
        $data = [
            'name' => 'Kayongo R',
            'email' => 'kayong@gmail.com',
            'password' => 'password',
         ];
         User::create($data);

        $user = User::all();
        return $user;
        return view('home');
    }
}
