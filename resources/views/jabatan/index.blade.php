@extends('layout/template')
@section('container')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Surat Perjanjian Kontrak</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Jabatan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-4">
                    <div class="text-end">
                        <a href="/jabatan/create" class="btn btn-primary">Tambah Jabatan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-hover table-striped w-100">
                            <table class="table datatable">
                                <thead>
                                    <th>No</th>
                                    <th>Jabatan</th>
                                    <th>Gaji</th>
                                    <th colspan="2">Action</th>
                                </thead>
                                <tfoot>
                                    <th>No</th>
                                    <th>Jabatan</th>
                                    <th>Gaji</th>
                                    <th colspan="2">Action</th>
                                </tfoot>
                                <tbody>
                                    @foreach ($data as $jabatan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jabatan->ket_jabatan }}</td>
                                        <td>Rp. {{ number_format($jabatan->gaji, 0, ".", ".") }}</td>
                                        <td>
                                            <form action="jabatan/{{ $jabatan->jabatan_id }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}                 
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