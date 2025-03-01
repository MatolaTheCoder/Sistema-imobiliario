<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return inertia(
            'index/index',
            [
                'nome' => 'Isac',
            ]);
    }

    public function show(){
        return inertia('index/Show');
    }
}
