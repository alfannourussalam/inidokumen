<?php

namespace App\Http\Helpers;

class Terbilang
{
    static function generate($angka) {
        $angka = (float)$angka;
        $bilangan = array(
            '',
            'satu',
            'dua',
            'tiga',
            'empat',
            'lima',
            'enam',
            'tujuh',
            'delapan',
            'sembilan',
            'sepuluh',
            'sebelas'
        );
     
        $hasil = '';
        if ($angka < 12) {
            $hasil = $bilangan[$angka];
            // return $hasil;
        } else if ($angka < 20) {
            $hasil = $bilangan[$angka - 10] . ' belas';
            // return $hasil;
        } else if ($angka < 100) {
            $hasil_bagi = (int)($angka / 10);
            $hasil_mod = $angka % 10;
            $hasil = trim(sprintf('%s puluh %s', $bilangan[$hasil_bagi], $bilangan[$hasil_mod]));
            // return $hasil;
        } else if ($angka < 200) {
            $hasil = sprintf('seratus %s', self::generate($angka - 100));
        } else if ($angka < 1000) {
            $hasil_bagi = (int)($angka / 100);
            $hasil_mod = $angka % 100;
            $hasil = trim(sprintf('%s ratus %s', $bilangan[$hasil_bagi], self::generate($hasil_mod)));
        } else if ($angka < 2000) {
            $hasil = trim(sprintf('seribu %s', self::generate($angka - 1000)));
        } else if ($angka < 1000000) {
            $hasil_bagi = (int)($angka / 1000); // karena hasilnya bisa ratusan jadi langsung digunakan rekursif
            $hasil_mod = $angka % 1000;
            $hasil = sprintf('%s ribu %s', self::generate($hasil_bagi), self::generate($hasil_mod));
        } else if ($angka < 1000000000) {
            // hasil bagi bisa satuan, belasan, ratusan jadi langsung kita gunakan rekursif
            $hasil_bagi = (int)($angka / 1000000);
            $hasil_mod = $angka % 1000000;
            $hasil = trim(sprintf('%s juta %s', self::generate($hasil_bagi), self::generate($hasil_mod)));
        } else if ($angka < 1000000000000) {
            // bilangan 'milyaran'
            $hasil_bagi = (int)($angka / 1000000000);
            $hasil_mod = fmod($angka, 1000000000);
            $hasil = trim(sprintf('%s milyar %s', self::generate($hasil_bagi), self::generate($hasil_mod)));
        } else if ($angka < 1000000000000000) {                          
            // bilangan 'triliun'                           
            $hasil_bagi = $angka / 1000000000000;                           
            $hasil_mod = fmod($angka, 1000000000000);                           
            $hasil = trim(sprintf('%s triliun %s', self::generate($hasil_bagi), self::generate($hasil_mod)));                       
        } else {                            
            $hasil = 'Wow...';                        
        }

        return $hasil;
    }
}
