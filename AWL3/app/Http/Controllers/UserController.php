<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\Models\user;


class UserController extends Controller
{
    //
    function index()
    {
        return DB::select("select * from users");
        
        //return DB::select("select * from users");

    }
    function getData()
    {
        return users::all();
    }
}
