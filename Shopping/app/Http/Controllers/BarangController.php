<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    public function index()
    {
        return view('home.index', [
            "barang" => Barang::latest()->paginate(11)
        ]);
    }

    public function more()
    {
        return view('home.listbarang', [
            "barang" => Barang::paginate(16)->all()
        ]);
    }
}
