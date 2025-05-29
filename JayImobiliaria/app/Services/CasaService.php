<?php

namespace App\Services;

use App\Models\Casa;
use Illuminate\Http\Request;

class CasaService
{
    public function getAll()
    {
        return Casa::all();
    }

    public function create(Request $request)
    {
        return Casa::create($request->all());
    }

    public function update(Request $request, Casa $casa)
    {
        $casa->fill($request->all());
        $casa->save();
        return $casa;
    }

    public function delete(Casa $casa)
    {
        $casa->delete();
    }
}
