<?php

namespace App\Http\Controllers\logic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function index(){
        return view('others.index');
    }

    public function grid(){
        return view('others.grid_flex');
    }

    public function dimensiones(){
        return view('others.dimensiones_espacios');
    }

    public function texto(){
        return view('others.texto_tipografia');
    }

    public function display(){
        return view('others.display');
    }

    public function flex(){
        return view('others.flex_box');
    }

    public function utilerias(){
        return view('others.utilerias');
    }

    public function variantes(){
        return view('others.variantes_y_pseudoclases');
    }

    public function practica(){
        return view('others.practica1');
    }
}
