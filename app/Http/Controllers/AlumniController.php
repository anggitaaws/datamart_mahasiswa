<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function create()
    {
        return view('tambah_alumni');
    }
}
