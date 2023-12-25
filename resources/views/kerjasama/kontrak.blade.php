@extends('layout/template')
@section('container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Surat Perjanjian Kontrak</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Kerjasama</a></li>
                <li class="breadcrumb-item active">Perjanjian Kontrak</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-4">
                    <div class="text-end">
                        <a href="/kontrak_show" class="btn btn-warning">Lihat Dokumen</a>
                    </div>
                    <div class="card-body">
                        <form action="/kontrak" method="post">
                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" value="{{ $currentDate }}" required>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <label for="nama">Nama (dengan gelar)</label>
                                <input type="text" class="form-control" name="nama_pegawai" value="{{ old('nama_pegawai') }}" required>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <label for="tempatLahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggallahir" value="{{ old('tanggallahir') }}" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jabatan">Jabatan</label>
                                <select class="form-select" aria-label="Default select example" name="jabatan" id="jabatan">
                                    @foreach ($jabatans as $jabatan)
                                    <option value="{{ $jabatan->jabatan_id }}" data-gaji="{{ $jabatan->gaji }}">{{ $jabatan->ket_jabatan }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="row mb-3">
                                <label for="gaji">Gaji</label>
                                <input type="text" class="form-control" id="harga" name="gaji" value="{{ old('gaji') }}" required>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-md-6 col-sm-12">
                                    <label for="tanggalmulai">Tanggal Mulai</label>
                                    <input type="date" class="form-control" name="tanggalmulai" value="{{ $fdate }}" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="tanggalakhir">Tanggal Berakhir</label>
                                    <input type="date" class="form-control" name="tanggalakhir" value="{{ $ldate }}" required>
                                </div>

                            </div>
                            <button type="submit" name="buat_kontrak" class="btn btn-primary">Buat Naskah</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->