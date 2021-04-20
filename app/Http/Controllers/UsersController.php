<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    //

    public function loadView()
    {
        $data = ['1', '2', '3', '4', '5'];
        return view('users', ['users' => $data]);
    }

    public function getData(Request $request)
    {
        dd($request->all());
    }

    public function index()
    {
        return DB::select('select * from users');
    }

    public function getUserData()
    {
        return User::all();
    }

    public function index1()
    {
        $data =  Http::get("https://reqres.in/api/users?page=1");

        return view('users.users',['collection'=>$data['data']]);
    }
}
