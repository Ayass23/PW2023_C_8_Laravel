<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandises = Merchandise::latest()->paginate();

        // $merchandises = $merchandiseData->map(function ($merchandise) {
        //     return [
        //         'id' => $merchandise->id,
        //         'name' => $merchandise->nama,
        //         'stok' => $merchandise->stok,
        //         'harga' => 'Rp. ' . number_format($merchandise->harga, 0, ',', '.'),
        //         'gambar' => asset('/public/images/' . $merchandise->gambar),
        //     ];
        // });

        return view('Merchandise', compact('merchandises'));
    }

    public function pembelian($id)
    {
        $merch = Merchandise::findOrFail($id);
        
        return view('PembelianMerch', compact('merch'));
    }

    public function pembayaran(Request $request)
    {
        if (!$request->filled('merch_id') || !$request->filled('quantity')) return redirect('/merchandise')->with('error', 'Data tidak ditemukan');

        $merch = Merchandise::findOrFail($request->merch_id);   

        return view('PembayaranMerch', compact('merch'));
    }

    public function pembayaranStore(Request $request)
    {
        if (!$request->filled('merch_id') || !$request->filled('quantity')) return redirect('/merchandise')->with('error', 'Data tidak ditemukan');

        $merch = Merchandise::findOrFail($request->merch_id);

        // check stok
        if ($merch->stok < $request->quantity) return back()->with('error', 'Stok tidak cukup');

        $total = $merch->harga * $request->quantity;

        $merch->update([
            'stok' => $merch->stok - $request->quantity,
        ]);

        $merch->transactions()->create([
            'nama_lengkap' => $request->nama_lengkap,
            'identitas' => $request->identitas,
            'nomor_identitas' => $request->nomor_identitas,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'quantity' => $request->quantity,
            'total' => $total,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Pembelian berhasil');
    }
}
