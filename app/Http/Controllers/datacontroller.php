<?php

namespace App\Http\Controllers;


use App\student;
use App\test;
use Illuminate\Http\Request;
class datacontroller extends Controller
{
    public function index(){

        $test = test::all();
        return $test;
    }
}
