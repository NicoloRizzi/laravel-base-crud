<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    public function index() {
        // Ottieni tutti i record da una tabella
        $students = Student::all();
        /* dd($students); */

        // WHERE
        $students = Student::where('name','Pluto')->get();
        return view ('home', compact('students'));
    }
}
