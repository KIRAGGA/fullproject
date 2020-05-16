<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

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

        $usr = new User();
        dd($usr);
        return view('home');
    }
}
