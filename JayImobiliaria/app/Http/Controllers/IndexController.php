<?php

namespace App\Http\Controllers;

use App\Services\CasaService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    protected $casaService;
    public function __construct(CasaService $casaService) {
        $this->casaService = $casaService;
    }
    public function index() {
        $casas = $this->casaService->getAll();
        return inertia(
            'index/index',
            [
                'casas' => $casas,
            ]);
    }

    public function show(){
        return inertia('index/Show');
    }
}
