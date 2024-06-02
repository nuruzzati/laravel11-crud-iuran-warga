<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Requests\StorePembayaranRequest;
use App\Http\Requests\UpdatePembayaranRequest;
use App\Models\Warga;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', [
            'pembayaran' => $pembayaran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warga = Warga::all();
        return view('pembayaran.create', compact('warga')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $req = $request->validate([
            'jumlah' => 'integer',
            'warga_id' => 'required',
            'tanggal' => 'date'
        ]);

        Pembayaran::create($req);
        return redirect('/pembayaran')->with('success', 'data pembayaran berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        $warga = Warga::all();
        return view('pembayaran.edit', [
            'pembayaran' => $pembayaran,
            'warga' => $warga
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
         $req = $request->validate([
            'jumlah' => 'integer',
            'warga_id' => 'required',
            'tanggal' => 'date'
        ]);

        $pembayaran->update($req);
        return redirect('/pembayaran')->with('success', 'data pembayaran berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
          $pembayaran->delete();
        return redirect('/pembayaran')->with('success', 'data pembayaran berhasil dihapus!');
    }
}
