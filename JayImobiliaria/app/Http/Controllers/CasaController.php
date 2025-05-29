<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasaController extends Controller
{
    public function index()
    {
        return 0;
    }
    public function creates(){
        return inertia('casa/create');
    }
}
