<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        // DB::insert('insert into users (name, email,password) values (?,?,?)',
        // [
        //     'reagan','reagan@gmail.com','password',
        // ]);
        // $users =DB::select('select * from users');
        // return $users;

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
