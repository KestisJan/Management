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
            'name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'phone_number' => 'required|string|max:15',
            'truck_number' => 'required|string|max:50',
            'trailer_number' => 'required|string|max:50',
            'comment' => 'nullable|string',
        ]);
        dd($validatedData);

        Trucker::create($validatedData);

        return redirect('/truckers');
    }
}
