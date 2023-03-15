<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->wherein('role', ['admin', 'petugas'])->paginate(5);
        return view ('Admin.akun.index', compact('users'));
    }
    public function listmasyarakat()
    {
        $users = User::latest()->wherein('role', ['masyrakat'])->paginate(5);
        return view ('Admin.akun.masyarakat', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Admin.akun.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->nik = $request->input('nik');
        $user->no_telp= $request->input('no_telp');
        $user->password = $request->input('password')->bcrypt['password'];
        $user->role = $request->input('role');
        $user->save();

       
        return redirect ('/akun')->with('data user berhasil tersimpan');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, $id)
    {
        $user = User::find($id);
        return view ('Admin.akun.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user = new User;
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->nik = $request->input('nik');
        $user->no_telp= $request->input('no_telp');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        $user->save();
        return redirect ('/akun')->with('data user berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        
        $user->delete();

        return back()->with('akun berhasil dihapus');
    }
}
