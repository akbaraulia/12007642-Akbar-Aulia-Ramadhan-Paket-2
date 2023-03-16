<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduan = Pengaduan::latest()->paginate(5);
        return view ('pengaduan.index', compact('pengaduan'));
    }
    public function history()
    {
        $pengaduan = Pengaduan::latest()->paginate(5);
        return view ('pengaduan.history', compact('pengaduan'));
    }
    public function pengaduanadmin()
    {
        $pengaduan = Pengaduan::latest()->paginate(5);
        return view ('Admin.pengaduan', compact('pengaduan'));
    }
    public function pengaduanpetugas()
    {
        $pengaduan = Pengaduan::latest()->paginate(5);
        return view ('Petugas.pengaduan', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $pengaduan = new Pengaduan;
      
     { 
        $file = $request->file('foto');
      $extention = $file->getClientOriginalExtension();
      $filename = time().'.'.$extention;
      $file ->move('uploads/', $filename);
      $pengaduan->foto = $filename;

     }

     $pengaduan->tgl_pengaduan = $request->input('tgl_pengaduan');
        $pengaduan->nama_pelapor = $request->input('nama_pelapor');
        $pengaduan->isi_laporan = $request->input('isi_laporan');
        $pengaduan->nik = $request->input('nik');
        $pengaduan->status = $request->input('status');
        $pengaduan->save();

        return redirect('/pengaduan')->with('success','Berhasil Menyimpan !');
      
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
    public function edit( Pengaduan $pengaduan)
    {
        return view ('Pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pengaduan =new Pengaduan;
        if ($request->hasfile('foto'));
        {
            $file = $request->input('foto');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $pengaduan->foto = $filename;


        }

        $pengaduan->tgl_pengaduan = $request->input('tgl_pengaduan');
        $pengaduan->nama_pelapor = $request->input('nama_pelapor');
        $pengaduan->isi_laporan = $request->input('isi_laporan');
        $pengaduan->nik = $request->input('nik');
        $pengaduan->status = $request->input('status');
        $pengaduan->save();

        return redirect()->back()->with('success','Data sudah diubah !');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);

      
        $pengaduan->delete();

        return back()->with('data berhasil dihapus');
    }
    public function approve(Request $request, $pengaduan)
    {
        $pengaduan = Pengaduan::find($pengaduan);
        $pengaduan->status = $request->input('status');
        $pengaduan->update();
        return redirect('/pengaduanadmin')->with('success', 'Data berhasil disetujui.');


    }
}
