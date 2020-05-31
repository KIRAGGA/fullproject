<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $request){
        if($request->hasFile('image'))
        {
            $filename = $request->image->getClientOriginalName();

            if (auth()->user()->avatar) {
                Storage::delete('/public/images' . auth()->user()-avatar);
            }
            $request->image->storeAs('images', $filename, 'public');
            auth()->user()->update(['avatar' => $filename]);
        }
        
        return redirect()->back();
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
