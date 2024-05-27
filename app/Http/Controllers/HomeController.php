<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $siswa = Siswa::all();
        return view('home', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nis' => 'required|max:5',
            'nama' => 'required|max:100',
            'jk' => 'required',
            'kelas' => 'required|max:50',
            'alamat' => 'required'
        ]);
        Siswa::create([
            'nis' => $valid['nis'],
            'nama' => $valid['nama'],
            'jk' => $valid['jk'],
            'kelas' => $valid['kelas'],
            'alamat' => $valid['alamat']
        ]);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $get = Siswa::findOrFail($id);
        return view('edit', [ 'data' => $get ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'nis' => 'required|max:5',
            'nama' => 'required|max:100',
            'jk' => 'required',
            'kelas' => 'required|max:50',
            'alamat' => 'required'
        ]);
        $post = Siswa::findOrFail($id);
        $post->update($valid);
        return redirect("/home");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = Siswa::findOrFail($id);
        $get->delete();
        return redirect('/home')->with('success', 'Resource deleted');
    }
}
