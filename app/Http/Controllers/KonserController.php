<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use App\Models\Konser;


class KonserController extends Controller
{
    public function index()
    {
        //get movie
        $konser = Konser::latest()->paginate();
        //render view with posts
        return view('Homepage', compact('konser'));
        
    }

    public function store(Request $request)
    {
        //Validasi Formulir
        $this->validate($request, [
            'penyelenggara'=> 'required',
            'nama' => 'required',
            'tanggal'=> 'required',
            'jam'=> 'required',
            'lokasi'=> 'required',
            'harga'=> 'required',
            'deskripsi'=> 'required',
            'poster'=> 'image',
            'jumlah'=> 'required'
        ]);

        $path = public_path('public/images/');

        $poster = $request->file('poster');  // Use the correct field name
        $posterName = time() . '.' . $poster->getClientOriginalExtension();
        $poster->move($path, $posterName);
        //Fungsi Simpan Data ke dalam Database
        Konser::create([
            'penyelenggara'=> $request->penyelenggara,
            'nama' => $request->nama,
            'tanggal'=> $request->tanggal,
            'jam'=> $request->jam,
            'lokasi'=> $request->lokasi,
            'harga'=> $request->harga,
            'deskripsi'=> $request->deskripsi,
            'poster'=> '/public/images/'.$posterName,
            'jumlah'=> $request->jumlah,
        
        ]);
        try{
        return redirect(url('ReportEvent'));
        }catch(Exception $e){
        return redirect(url('ReportEvent'));
        }
    }

    public function beli($id)
    {
        $konser = Konser::findOrFail($id);
        
        return view('Pembelian', compact('konser'));
    }

    public function update(Request $request, $id)
    {
        $konser = Konser::find($id);
        //validate form
        $this->validate($request, [
            'penyelenggara'=> 'required',
            'nama' => 'required',
            'tanggal'=> 'required',
            'jam'=> 'required',
            'lokasi'=> 'required',
            'harga'=> 'required',
            'deskripsi'=> 'required',
            'poster'=> 'image'
        ]);

        $path = public_path('public/images/');
        $validated['poster'] = $konser->poster;

        $konser->penyelenggara = $request->penyelenggara;
        $konser->nama = $request->nama;
        $konser->tanggal = $request->tanggal;
        $konser->jam = $request->jam;
        $konser->lokasi = $request->lokasi;
        $konser->harga = $request->harga;
        $konser->deskripsi = $request->deskripsi;
        $konser->jumlah = $request->jumlah;

        
        if($request->hasFile('poster')){
            $poster = $request->file('poster');
            $posterName = time() . '.' . $poster->getClientOriginalExtension();
            $validated['poster'] = $posterName;
            $poster->move(public_path('public/images'), $posterName);

            $konser->poster = '/public/images/' . $posterName;
            // delete old file
            $oldPath = public_path('/public/images/'.$konser->poster);
            if(file_exists($oldPath) && $konser->poster != 'poster.png'){
                unlink($oldPath);
            }
        }
        
        $konser->save(); 
           
        return redirect(url('ReportEvent'))->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id)
    {
        $konser =Konser::find($id);
        
        $oldPath = public_path('/public/images/'.$konser->poster);
        if(file_exists($oldPath) && $konser->poster != 'poster.png'){
            unlink($oldPath);
        }
        $konser->delete();
        return redirect(url('ReportEvent'))->with(['success' => 'Data
        Berhasil Dihapus!']);
    }

    public function pembayaran(Request $request)
    {
        if (!$request->filled('konser_id') || !$request->filled('quantity')) return redirect('/home')->with('error', 'Data tidak ditemukan');

        $konser = Konser::findOrFail($request->konser_id);

        return view('Pembayaran', compact('konser'));
    }

    public function pembayaranStore(Request $request)
    {
        if (!$request->filled('konser_id') || !$request->filled('quantity')) return redirect('home')->with('error', 'Data tidak ditemukan');

        $konser = Konser::findOrFail($request->konser_id);

        // check stok
        if ($konser->jumlah < $request->quantity) return redirect('home')->with('error', 'Stok tidak cukup');

        $total = $konser->harga * $request->quantity;

        $konser->update([
            'jumlah' => $konser->jumlah - $request->quantity,
        ]);

        $konser->transactions()->create([
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
