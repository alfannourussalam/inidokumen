<?php

namespace App\Http\Controllers;

// use PDF;
use App\Dokumen;
use App\Jabatan;
use Barryvdh\DomPDF\Facade;
use Illuminate\Http\Request;
use App\Http\Helpers\Tanggal;
use App\Http\Helpers\Terbilang;
use Illuminate\Support\Facades\DB;

class KontrakControllers extends Controller
{

    public function create()
    {
        $year = date('Y');
        $currentDate = date('Y-m-d');
        $fdate = $year + 1 . '-' . '02' . '-' . '01';
        $ldate = $year + 1 . '-' . '12' . '-' . '31';
        $jabatan = Jabatan::all();
        return view('kerjasama.kontrak', [
            'title' => 'Kontrak',
            'jabatans' => $jabatan,
            'currentDate' => $currentDate,
            'fdate' => $fdate,
            'ldate' => $ldate,
        ]);
    }

    public function index()
    {
        // $kontrak = Dokumen::with('jabatan')->get();

        $kontrak = DB::table('dokumens')
            ->join('jabatans', 'dokumens.jabatan_id', '=', 'jabatans.jabatan_id')
            ->select('dokumens.*', 'jabatans.ket_jabatan')
            ->get();

        return view('kerjasama.kontrak_all', [
            'title'     => 'Dokumen Kontrak',
            'dokumen'   => $kontrak,
        ]);
    }

    public function store(Request $request)
    {
        // validasi data
        // dd($request->all());
        $this->validate($request, [
            'tanggal'       =>  'required',
            'nama_pegawai'  =>  'required|max:190|string',
            'tempat_lahir'  =>  'required|string',
            'tanggallahir'   =>  'required',
            'jabatan'       =>  'required|max:190|string',
            'gaji'          =>  'required',
            'tanggalmulai'   =>  'required',
            'tanggalakhir'  =>  'required',
        ]);


        Dokumen::create([
            'tanggal'       =>  $request->tanggal,
            'nama_pegawai'  =>  $request->nama_pegawai,
            'tempat_lahir'  =>  $request->tempat_lahir,
            'tanggal_lahir'   => $request->tanggallahir,
            'dokumen_id'       =>  1,
            'jabatan_id'       =>  $request->jabatan,
            'gaji'          =>  str_replace('.','',$request->gaji),
            'tanggal_mulai'   =>  $request->tanggalmulai,
            'tanggal_akhir'  =>  $request->tanggalakhir,
        ]);

        return redirect('kontrak_show');
    }

    public function show($id)
    {
        // $data = Dokumen::where('id', $id)->first();
        $data = DB::table('dokumens')
            ->join('jabatans', 'dokumens.jabatan_id', '=', 'jabatans.jabatan_id')
            ->select('dokumens.*', 'jabatans.ket_jabatan')
            ->where('id', $id)
            ->first();
        $direktur = 'dr. NANANG SUYANTO, M. Si.';
        $pangkat = 'Pembina';
        $nip = '19691105 200212 1 002';
        
        $pdf = new \Mpdf\Mpdf([
            'format'                        => 'A4',
            'default_font_size'             => '12',
            'default_font'                  => 'Tahoma',
        ]);
        $pdf->useFixedNormalLineHeight = true;
        $pdf->useFixedTextBaseline = true;
        $pdf->normalLineheight = 1.33;

        // Items
        $margin = '<style>@page {
            margin-top: 2cm;
            margin-bottom: 2.5cm;
            margin-left: 2.5cm;
            margin-right: 2cm;
           }</style>';


        $pdf->WriteHTML($margin);
        $pdf->WriteHTML('<img src="./assets/img/kop.jpg" />');
        
        $pdf->writeHTML(view('kerjasama.kontrak_download', [
            'title'    => 'Download Dokumen Kontrak',
            'data'     => $data,
            'direktur' => $direktur,
            'pangkat'  => $pangkat,
            'nip'      => $nip,
            'terbilang'     => Terbilang::generate($data->gaji),
            'tanggal_lahir' => Tanggal::tanggal($data->tanggal_lahir),
            'tanggal_mulai' => Tanggal::tanggal($data->tanggal_mulai),
            'tanggal_akhir' => Tanggal::tanggal($data->tanggal_akhir),
        ]));

        $pdf->debug = true;
        $pdf->output();

        // return view('kerjasama.kontrak_download', [
        //     'title' => 'Download Dokumen Kontrak',
        //     'data'  => $data,
        //     'tanggal_lahir' => Tanggal::tanggal($data->tanggal_lahir),
        //     'tanggal_mulai' => Tanggal::tanggal($data->tanggal_mulai),
        //     'tanggal_akhir' => Tanggal::tanggal($data->tanggal_akhir),
        // ]);
    }

    public function destroy($id)
    {
        $data = Dokumen::where('id',$id)->first();
        $data->delete();
        return redirect()->route('kontrak_show')->with('alert-success','Data berhasi dihapus!');
    }
}
