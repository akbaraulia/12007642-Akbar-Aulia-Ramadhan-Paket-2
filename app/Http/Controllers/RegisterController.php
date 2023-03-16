<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('Auth.Register');
    }
    public function store(Request $request)
    {
        $user = new User;
        
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->nik = $request->input('nik');
        $user->no_telp= $request->input('no_telp');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

       
        return redirect ('/login')->with('data user berhasil tersimpan');

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
