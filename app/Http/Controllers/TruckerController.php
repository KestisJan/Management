<?php

namespace App\Http\Controllers;

use App\Models\Trucker;
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
            'name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'phone_number' => ['required', 'numeric', 'min:3'],
            'truck_number' => ['required', 'min:3'],
            'trailer_number' => ['required', 'min:3'],
            'comment' => ['nullable', 'min:3'],
        ]);
        dd($validatedData);
       

        Trucker::create($validatedData);

        return redirect('/truckers');
    }
}
