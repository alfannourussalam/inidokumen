<?php

namespace App\Http\Controllers;

use App\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mydata = Jabatan::all();
        return view('jabatan.index', [
            'title'     => 'Jabatan',
            'data'   => $mydata,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan.create', [
            'title'     => 'Tambah Jabatan',
        ]);   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ket_jabatan' => 'required|string',
            'gaji' => 'required',
        ]);
        Jabatan::create([
            'ket_jabatan'   =>  $request->ket_jabatan,
            'gaji'          =>  str_replace('.','',$request->gaji),
        ]);
        return redirect('jabatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jabatan $jabatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($jabatan_id)
    {

        Jabatan::where('jabatan_id', $jabatan_id)->delete();
        // Jabatan::destroy($jabatan);
        // dd($jabatan_id);
        // $data = Jabatan::where('jabatan_id',$jabatan_id)->first();
        // $jabatan->delete();
        return redirect('jabatan')->with('alert-success','Data berhasi dihapus!');
    }
}
