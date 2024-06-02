<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use App\Http\Requests\StoreWargaRequest;
use App\Http\Requests\UpdateWargaRequest;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warga = Warga::all();
        return view('warga.index', [
            'warga' => $warga
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('warga.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Warga::create($request->all());
        return redirect('/warga')->with('success', 'data warga berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Warga $warga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Warga $warga)
    {
        return view('warga.edit', [
            'warga' => $warga
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Warga $warga)
    {
       // Update the model
        $warga->update($request->all());

        // Redirect with success message
        return redirect('/warga')->with('success', 'data warga berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warga $warga)
    {
        $warga->delete();
        return redirect('/warga')->with('success', 'data warga berhasil dihapus!');

    }
}
