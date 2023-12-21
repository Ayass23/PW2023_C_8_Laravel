<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandises = Merchandise::latest()->paginate();

        return view('merchandise', compact('merchandises'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis'=> 'required',
            'stok'=> 'required',
            'harga'=> 'required',
            'gambar'=> 'image',
            
        ]);

        $path = public_path('public/images/');

        $gambar = $request->file('gambar');  // Use the correct field name
        $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move($path, $gambarName);
        //Fungsi Simpan Data ke dalam Database
        Merchandise::create([
            'nama'=> $request->nama,
            'jenis' => $request->jenis,
            'stok'=> $request->stok,
            'harga'=> $request->harga,
            'gambar'=> '/public/images/'.$gambarName,

        
        ]);

        return redirect(url('ReportMerchandise'))->with('success', 'Merchandise berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis'=> 'required',
            'stok'=> 'required',
            'harga'=> 'required',
            'gambar'=> 'image',
            
        ]);

        $merchandise = Merchandise::findOrFail($id);

        $validated['gambar'] = $merchandise->gambar;

        $merchandise->nama = $request->nama;
        $merchandise->jenis = $request->jenis;
        $merchandise->stok = $request->stok;
        $merchandise->harga = $request->harga;

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $fileName = time() . '.' . $gambar->getClientOriginalExtension();
            $validated['gambar'] = $fileName;
            $gambar->move(public_path('public/images'), $fileName);

            $merchandise->gambar = '/public/images/' . $fileName;
            // delete old file
            $oldPath = public_path('/public/images/'.$merchandise->gambar);
            if(file_exists($oldPath) && $merchandise->gambar != 'gambar.png'){
                unlink($oldPath);
            }
        }

        $merchandise->save();

        return redirect(url('ReportMerchandise'))->with('success', 'Merchandise berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $merchandise = Merchandise::findOrFail($id);

        // delete old file
        $oldPath = public_path('/public/images/'.$merchandise->gambar);
        if(file_exists($oldPath) && $merchandise->gambar != 'gambar.png'){
            unlink($oldPath);
        }
        $merchandise->delete();

        return redirect(url('ReportMerchandise'))->with('success', 'Merchandise berhasil dihapus.');
    }
}
