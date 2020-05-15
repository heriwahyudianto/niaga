<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;

class PaketController extends Controller
{
    public function all()
    {
        return Paket::all();
    }

    // mengambil data by id
    public function show($id)
    {
        return Paket::find($id);
    }

    // menambah data
    public function store(Request $request)
    {
        return Paket::create($request->all());
    }

    // mengubah data
    public function update($id, Request $request)
    {
        $paket = Paket::find($id);
        $paket->update($request->all());
        return $paket;
    }

    // menghapus data
    public function delete($id)
    {
        $paket = Paket::find($id);
        $paket->delete();
        return 204;
    }
}
