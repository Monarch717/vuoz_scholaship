<?php

namespace App\Http\Controllers\Scholar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScholarController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index(){
        return view('scholars/overview');
    }
}
