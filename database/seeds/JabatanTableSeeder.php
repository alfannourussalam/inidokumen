<?php

use App\Jabatan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatans = [
            ['ket_jabatan'=>'Administrasi', 'gaji' => 1100000],
            ['ket_jabatan'=>'Administrasi Keuangan', 'gaji' => 1100000],
            ['ket_jabatan'=>'Administrasi Umum', 'gaji' => 1100000],
            ['ket_jabatan'=>'Akuntansi', 'gaji' => 1100000],
            ['ket_jabatan'=>'Analis', 'gaji' => 750000],
            ['ket_jabatan'=>'Apoteker', 'gaji' => 1500000],
            ['ket_jabatan'=>'Asisten Apoteker', 'gaji' => 750000],
            ['ket_jabatan'=>'Bidan', 'gaji' => 750000],
            ['ket_jabatan'=>'Cleaning Service', 'gaji' => 700000],
            ['ket_jabatan'=>'Driver', 'gaji' => 700000],
            ['ket_jabatan'=>'Doter Umum', 'gaji' => 2500000],
            ['ket_jabatan'=>'Doter Spesialis Anak', 'gaji' => 15000000],
            ['ket_jabatan'=>'Doter Spesialis Anestesi', 'gaji' => 15000000],
            ['ket_jabatan'=>'Doter Spesialis Bedah', 'gaji' => 15000000],
            ['ket_jabatan'=>'Doter Spesialis Jantung dan Pembuluh Darah', 'gaji' => 15000000],
            ['ket_jabatan'=>'Doter Spesialis Obstetri dan Ginekologi', 'gaji' => 15000000],
            ['ket_jabatan'=>'Doter Spesialis Penyakit Dalam', 'gaji' => 15000000],
            ['ket_jabatan'=>'Doter Spesialis Radiologi', 'gaji' => 1500000],
            ['ket_jabatan'=>'Doter Spesialis Saraf', 'gaji' => 15000000],
            ['ket_jabatan'=>'Laundry', 'gaji' => 700000],
            ['ket_jabatan'=>'Perawat', 'gaji' => 7500000],
            ['ket_jabatan'=>'Satpol PP', 'gaji' => 1100000],
            ['ket_jabatan'=>'Teknik Informatika (TI)', 'gaji' => 1100000],
        ];
        foreach ($jabatans as $jabatan) {
            Jabatan::insert($jabatan);
        }
    }
}
