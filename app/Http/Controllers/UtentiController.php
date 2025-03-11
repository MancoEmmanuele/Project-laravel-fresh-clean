<?php

namespace App\Http\Controllers;

use App\Models\Utenti;
use Illuminate\Http\Request;

class UtentiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name'=>$request->('name'),
            
        ])
    }

    /**
     * Display the specified resource.
     */
    public function show(Utenti $utenti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Utenti $utenti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utenti $utenti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utenti $utenti)
    {
        //
    }
}
