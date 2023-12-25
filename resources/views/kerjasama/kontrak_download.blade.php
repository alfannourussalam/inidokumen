<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
</head>
<style>
    body {
        font-family: Tahoma;
    }

    .page {
        /* max-width: 252mm; */
        background-color: yellowgreen;
    }

    .fw-bold {
        font-weight: bold;
    }

    .justify-content-center {
        margin: 0 auto;
        text-align: center;
    }

    .mt-1 {
        margin-top: 10px;
    }

    .mt-3 {
        margin-top: 30px;
    }

    table {
        border-collapse: collapse;
    }

    .text-center {
        text-align: center;
    }

    .text-justify {
        text-align: justify;
        line-height: 1.33;
    }

    .fs-11 {
        font-size: 11pt;
    }

    .space {
        display: inline-block;
        width: 80rem;
        margin-top: 0;
        vertical-align: top;
    }
    
</style>

<body>

    <div class="container w-100">
        <div class="row justify-content-center fw-bold mt-1"><u>SURAT PERJANJIAN KONTRAK KERJA</u></div>
        @php($syear = explode('-',$data->tanggal_mulai)[0])

        <div class="row justify-content-center fw-bold">NOMOR: 800/<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>/432.604/{{ $syear }}</div>

        <!-- ISI -->
        <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dalam rangka menunjang pelaksanaan tugas dan kegiatan pada tahun {{ $syear }}, perlu adanya tambahan tenaga atau personil yang professional dan kompeten sesuai kebutuhan organisasi dilingkungan Pemerintah Kabupaten Pamekasan dengan mengadakan perjanjian kontrak kerja.</p>
        <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adapun para pihak yang bersepakat mengikatkan diri dalam perjanjian kontrak kerja adalah:</p>

        <table>
            <tr>
                <td style="width: 40px; vertical-align:top">I.</td>
                <td class="text-justify">
                    <p>{{ $direktur }}, Direktur RSUD Waru Pamekasan, dalam hal ini bertindak untuk dan atas nama Bupati Pamekasan, untuk melakukan perjanjian, selanjutnya disebut sebagai PIHAK KESATU;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 40px; vertical-align:top">II.</td>
                <td class="text-justify">
                    <p>{{ $data->nama_pegawai }}, Lahir di {{$data->tempat_lahir}} tanggal {{ $tanggal_lahir }}, Sebagai tenaga kontrak {{ $data->ket_jabatan }} pada RSUD Waru Pamekasan, selanjutnya disebut sebagai PIHAK KEDUA;</p>
                </td>
            </tr>
        </table>
        <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan ini menetapkan atau menyepakati ketentuan-ketentuan sebagai berikut:</p>

        <!-- PASAL -->
        <p class="justify-content-center">Pasal 1</p>
        <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PIHAK KESATU memberikan persetujuan kepada PIHAK KEDUA, sebagaimana PIHAK KEDUA menerima persetujuan tersebut dari PIHAK KESATU yang tidak dapat di pindah tangankan kepada pihak/ orang lain untuk melaksanakan tugas pekerjaan sehari-hari di RSUD Waru Pamekasan sebagai tenaga kontrak.</p>

        <p class="justify-content-center">Pasal 2</p>
        <table>
            <tr>
                <td style="width: 40px; vertical-align:top">(1).</td>
                <td class="text-justify">
                    <p>Dalam melaksanakan tugas pekerjaan sehari-hari, PIHAK KEDUA diharuskan untuk mengikuti ketentuan jadwal jam kerja yang ditetapkan.</p>
                </td>
            </tr>
            <tr>
                <td style="width: 40px; vertical-align:top">(2).</td>
                <td class="text-justify">
                    <p>Pengawasan terhadap pelaksanaan tugas dimaksud ayat (1), pasal ini dilakukan oleh ka.Sub.Bag. Tata Usaha RSUD Waru Pamekasan selaku atasan langsung secara berjenjang.</p>
                </td>
            </tr>
        </table>

        <p class="justify-content-center">Pasal 3</p>
        <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PIHAK KEDUA dalam melaksanakan pekerjaan adalah sebagai Tenaga Honor Daerah melalui Perjanjian Kontrak Kerja dan tidak ada ikatan atau tidak ada kewajiban PIHAK PERTAMA agar PIHAK KEDUA diangkat menjadi Calon Aparatur Sipil Negara (CASN).</p>

        <p class="justify-content-center">Pasal 4</p>
        <table>
            <tr>
                <td style="width: 40px; vertical-align:top">(1).</td>
                <td class="text-justify">
                    <p>PIHAK KEDUA dalam melaksanakan tugasnya diberikan upah jasa kerja sebesar Rp. {{ number_format($data->gaji, 0, ",", ".") }} ({{ $terbilang }} rupiah) setiap bulan, termasuk pembayaran BPJS Kesehatan dan BPJS Ketenagakerjaan;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 40px; vertical-align:top">(2).</td>
                <td class="text-justify">
                    <p>Pemberian upah sebagaimana dimaksud ayat (1) pasal ini didasarkan atas presensi/ kehadiran PIHAK KEDUA dalam melaksanakan tugas sehari-hari;</p>
                </td>
            </tr>
            <tr>
                <td style="width: 40px; vertical-align:top">(3).</td>
                <td class="text-justify">
                    <p>Pada setiap kali tidak masuk kerja kecuali karena sakit atau ada alasan lainnya yang disertai dengan surat pemberitahuan/ permintaan izin dari PIHAK KEDUA, akan diadakan pemotongan upah sebesar RP.20.000 (Dua puluh ribu rupiah) setiap hari;</p>
                </td>
            </tr>
        </table>

        <p class="justify-content-center">Pasal 5</p>
        <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apabila PIHAK KEDUA tidak melaksanakan tugas pekerjaanya selama 6 (enam) hari berturut-turut tanpa ada alasan yang sah dan dapat dipertanggungjawabkan, maka PIHAK KESATU berhak membatalkan secara sepihak perjanjian kontrak kerja ini dan kepada PIHAK KEDUA tidak diberikan ganti rugi sebagai akibat batalnya perjanjian.</p>

        <p class="justify-content-center">Pasal 6</p>
        <table>
            <tr>
                <td style="width: 40px; vertical-align:top">(1).</td>
                <td class="text-justify">
                    <p>Perjanjian kontrak kerja ini mulai berlaku pada tanggal {{ $tanggal_mulai }} sampai dengan {{ $tanggal_akhir }};</p>
                </td>
            </tr>
            <tr>
                <td style="width: 40px; vertical-align:top">(2).</td>
                <td class="text-justify">
                    <p>Perjanjian sebagaimana dimaksud ayat (1) pasal ini setelah habis masa berlakunya, dapat diperpanjang dengan membuat perjanjian kontrak kerja baru berdasarkan kebutuhan dan evaluasi kerja;</p>
                </td>
            </tr>
        </table>

        <!-- PENUTUP -->
        <p class="text-justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Perjanjian Kontrak Kerja ini dibuat dan dapat di gunakan sebagaimana mestinya.</p>

        <!-- VALIDASI -->
        <table class="mt-3">
            <tr>
                <td colspan="2"></td>
                <td class="text-center">Pamekasan, {{ $tanggal_mulai }}</td>
            </tr>
            <tr>
                <td style="width: 300px; vertical-align:top" class="text-center">PIHAK KEDUA
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><b><u>{{ $data->nama_pegawai }}</u></b></p>
                </td>

                <td style="width: 30px;"></td>

                <td style="width: 300px; vertical-align:top" class="text-center">PIHAK PERTAMA
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p><u><b>{{ $direktur }}</b></u></p>
                    <p>{{ $pangkat }}</p>
                    <p>NIP. {{ $nip }}</p>
                </td>
            </tr>
        </table>

    </div>

</body>
<!-- <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->

</html>