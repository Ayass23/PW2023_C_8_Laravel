<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konser;

class PembelianController extends Controller
{
    public function index($id)
    {
        $konser = Konser::find($id);
        return view('Pembelian', compact('konser'));
    }
}
