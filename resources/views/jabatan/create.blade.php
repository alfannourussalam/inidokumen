@extends('layout/template')
@section('container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Daftar Jabatan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Jabatan</a></li>
                <li class="breadcrumb-item active">Tambah Daftar Jabatan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-4">
                    <div class="text-end">
                        <a href="/jabatan" class="btn btn-warning">Daftar Jabatan</a>
                    </div>
                    <div class="card-body">
                        <form action="/jabatan" method="post">
                            {{ csrf_field() }}
                            
                            <div class="row mb-3">
                                <label for="namaJabtan">Nama/Keterangan Jabatan</label>
                                <input type="text" class="form-control" name="ket_jabatan" value="{{ old('ket_jabatan') }}" required>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="gaji">Gaji</label>
                                <input type="text" class="form-control" placeholder="Masukkan nominal gaji" id="harga" name="gaji" value="{{ old('gaji') }}" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->