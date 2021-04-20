<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
