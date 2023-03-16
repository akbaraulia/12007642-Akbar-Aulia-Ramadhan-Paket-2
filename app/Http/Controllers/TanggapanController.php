<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tanggapan;
use App\Models\Pengaduan;
use App\Models\User;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::latest()->paginate(5);
        $tanggapan = Tanggapan::latest()->paginate(5);
        return view ('Tanggapan.index', compact('tanggapan', 'user'));
    }
    public function history()
    {
        $tanggapan = Tanggapan::latest()->paginate(5);
        $pengaduan = Pengaduan::latest()->paginate(5);
        return view ('tanggapan.history', compact('tanggapan', 'pengaduan'));
    }
    public function tanggapanadmin()
    {
        $user = User::latest()->paginate(5);
        $tanggapan = Tanggapan::latest()->paginate(5);
        return view ('Admin.tanggapan', compact('tanggapan', 'user'));
    }
    public function tanggapanpetugas()
    {
        $user = User::latest()->paginate(5);
        $tanggapan = Tanggapan::latest()->paginate(5);
        return view ('Petugas.tanggapan', compact('tanggapan', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
        return view ('Tanggapan.create');
    }
    public function buat(Request $request, $id)
    {
        $pengaduan = Pengaduan::findorail($id);
        return view ('Tanggapan.create', compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $tanggapan = new Tanggapan;
      
     { 
        $file = $request->file('foto');
      $extention = $file->getClientOriginalExtension();
      $filename = time().'.'.$extention;
      $file ->move('uploads/', $filename);
      $tanggapan->foto = $filename;

     }

     $tanggapan->id_pengaduan = $request->input('id_pengaduan');
        $tanggapan->id_petugas = $request->input('id_petugas');
        $tanggapan->tgl_tanggapan = $request->input('tgl_tanggapan');
        $tanggapan->tanggapan = $request->input('tanggapan');
       
        $tanggapan->save();

        return back()->with('success','Berhasil Menyimpan !');
   
      
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
    public function edit( Tanggapan $tanggapan)
    {
        return view ('Tanggapan.edit', compact('tanggapan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tanggapan = Tanggapan::find($id);
        { 
            $file = $request->file('foto');
          $extention = $file->getClientOriginalExtension();
          $filename = time().'.'.$extention;
          $file ->move('uploads/', $filename);
          $tanggapan->foto = $filename;
    
         }
    
         $tanggapan->id_pengaduan = $request->input('id_pengaduan');
            $tanggapan->id_petugas = $request->input('id_petugas');
            $tanggapan->tgl_tanggapan = $request->input('tgl_tanggapan');
            $tanggapan->tanggapan = $request->input('tanggapan');
           
            $tanggapan->update();
    
            return back()->with('success','Berhasil Menyimpan !');
          
        }
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tanggapan = Tanggapan::find($id);

      
        $tanggapan->delete();

        return back()->with('data berhasil dihapus');
    }
  
}
