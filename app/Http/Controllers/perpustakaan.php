<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perpustakaan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('welcome');
    }

    public function anggota()
    {
        //
        return view('formanggota');
    }

    public function buku()
    {
        //
        return view('buku');
    }

    public function petugas()
    {
        //
        return view('petugas');
    }
    public function tabel()
    {
        //
        return view('tabel');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}