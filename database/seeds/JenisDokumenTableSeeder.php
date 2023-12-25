<?php

use App\JenisDokumen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisDokumenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisdokumens = [
            ['ket_dokumen'=>'Kontrak Pegawai'],
            ['ket_dokumen'=>'MOU'],
        ];
        foreach ($jenisdokumens as $jenisdokumen) {
            JenisDokumen::insert($jenisdokumen);
        }

    }
}
