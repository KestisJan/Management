<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckerController extends Controller
{
    public function index()
    {
        return view('truckers.index');
    }

    public function create()
    {
        return view('truckers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required'
        ])
    }
}
