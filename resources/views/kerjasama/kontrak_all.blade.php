@extends('layout/template')
@section('container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Surat Perjanjian Kontrak</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Kerjasama</a></li>
                <li class="breadcrumb-item"><a href="/">Perjanjian Kontrak</a></li>
                <li class="breadcrumb-item active">Dokumen Perjanjian Kontrak</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-4">
                    <div class="text-end">
                        <a href="/kontrak" class="btn btn-primary">Buat Naskah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-hover table-striped w-100">
                            <table class="table datatable">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Gaji</th>
                                    <th colspan="2">Action</th>
                                </thead>
                                <tfoot>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Gaji</th>
                                    <th colspan="2">Action</th>
                                </tfoot>
                                <tbody>
                                    @foreach ($dokumen as $dok)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{ $dok->nama_pegawai }}</td>
                                        <td>{{ $dok->ket_jabatan }}</td>
                                        <td>Rp. {{ number_format($dok->gaji, 0, ".", ".") }}</td>
                                        <td>
                                            <a href="/kontrak/{{$dok->id}}" class="btn btn-sm btn-primary">Lihat</a>
                                        </td>
                                        <td>
                                            <form action="kontrak/{{ $dok->id }}/destroy" method="post">
                                                {{ csrf_field() }}                                    
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                            </form>
                                            <!-- <a href="/kontrak" class="btn btn-sm btn-danger">Hapus</a> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->