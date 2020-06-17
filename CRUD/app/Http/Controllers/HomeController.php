<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

class HomeController extends Controller
{
    public function index() {
        /* // Ottieni tutti i record da una tabella
        $students = Student::all();

      /*   // WHERE
        $students = Student::where('name','Pluto')->get(); */
        /* return view ('home', compact('students')); */

        $videogame = Videogame::all();
        return view('home', compact('videogame'));
    }
}
