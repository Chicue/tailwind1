<?php

namespace App\Http\Controllers\logic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function index(){
        return view('others.index');
    }
}
