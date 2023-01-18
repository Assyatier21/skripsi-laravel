<!DOCTYPE html>
<html lang="en" id="print-element">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Rekomendasi Seleksi Tubel Untuk Dokter</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            margin: 0;
            font-size: 13px;
            font-family: "Times New Roman", Times, serif !important;
        }

        .alamat {
            margin-top: 8px;
            font-size: 12px;
            line-height: 100%;
            text-align: center;
        }

        .underline {
            border-bottom: 5px solid black;
            width: 100%;
        }

        .title-div .title {
            font-weight: bold;
            text-align: center;
            font-size: 17px;
        }

        .pernyataan p {
            text-align: justify;
        }

        .sign {
            float: right;
        }
    </style>
</head>

<body class="p-5">
    <div class="p-4">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('assets/images/docs/MetroJaya.png') }}" alt="">
            </div>
            <div class="col-8">
                <h6 class="fw-bold text-center mb-0">PEMERINTAH KOTA METRO</h6>
                <h3 class="fw-bold text-center mb-0">DINAS KESEHATAN</h3>
                <h6 class="fw-bold text-center mb-0">UPTD RSUD JENDERAL AHMAD YANI METRO</h6>
                <p class="mb-0 alamat" style="">
                    Jl Jend. A. Yani No.13 Kota Metro Kode Pos 34111 Telp(0725) 41820 <br>
                    Email : rsudayanimetro@ymail.com Website : rsuay.metrokota.go.id
                </p>
            </div>
            <div class="col-2">
                <img src="{{ asset('assets/images/docs/LogoJendralAhmadYani.png') }}" alt="image">
            </div>
        </div>
        <div class="underline mt-3"></div>

        <div class="title-div mt-4 text-center">
            <span class="text-decoration-underline">SURAT REKOMENDASI</span>
        </div>

        <div class="row nomor-surat text-center">
            <span>Nomor: 800/ _________ /LL-02/2023</span>
        </div>

        <div class="detail mt-4">
            <ol type="I">
                <li>Dasar Surat Saudara/i ………………………………, tanggal ………………… 2023 Perihal Permohonan Rekomendasi
                    Melanjutkan Pendidikan</li>
                <li>
                    <h6 class="mb-0">Yang bertanda tangan di bawah ini:</h6>
                    <div class="p-2">
                        <table class="w-100">
                            <tr>
                                <td class="w-25">Nama</td>
                                <td>:</td>
                                <td>dr. Fitri Agustina</td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <td>9810817 200902 2 007</td>
                            </tr>
                            <tr>
                                <td>Pangkat/Gol</td>
                                <td>:</td>
                                <td>Pembina / IV.a</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>Direktur</td>
                            </tr>
                            <tr>
                                <td>Unit Kerja</td>
                                <td>:</td>
                                <td>RSUD Jenderal Ahmad Yani Metro</td>
                            </tr>
                        </table>
                    </div>
                    <h6 class="mb-0">Menyatakan dengan sesungguhnya bahwa nama yang tercantum dibawah ini:</h6>
                    <div class="p-2">
                        <table class="w-100">
                            <tr>
                                <td class="w-25">Nama</td>
                                <td>:</td>
                                <td>{{ $user->nama }}</td>
                            </tr>
                            <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <td>{{ $user->nip }}</td>
                            </tr>
                            <tr>
                                <td>Pangkat/Gol</td>
                                <td>:</td>
                                <td>{{ $user->pangkat_golongan }}</td>
                            </tr>
                            <tr>
                                <td>TTL</td>
                                <td>:</td>
                                <td>{{ $user->tempat_lahir }} / {{
                                    Carbon\Carbon::parse($user->tanggal_lahir)->format('d M Y') }}</td>
                            </tr>
                            <tr>
                                <td>Alamat Domisili</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-white">.</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Pendidikan Terakhir</td>
                                <td>:</td>
                                <td>Pendidikan Dokter Umum Universitas……………………………</td>
                            </tr>
                        </table>
                        <div class="mt-4">
                            <p style="text-align: justify" class="m-0">
                                Untuk mengikuti Seleksi Penerimaan Mahasiswa Baru Program Pendidikan Dokter Spesialis,
                                Program Studi Ilmu ……………………,
                                Fakultas Kedokteran Universitas ………………….. Tahun akademik
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,
                                dengan ketentuan sebagai
                                berikut :

                            <ol>
                                <li style="text-align: justify">Biaya yang dikeluarkan selama mengikuti seleksi dan
                                    pendidikan apabila yang
                                    bersangkutan di terima menjadi mahasiswa
                                    Universitas ……………………………… di tanggung sepenuhnya oleh yang bersangkutan.</li>
                                <li style="text-align: justify">Bersedia mengabdikan diri di Kota Metro apabila lulus
                                    Program Pendidikan Dokter
                                    Spesialis …………….., Fakultas Kedokteran
                                    Universitas ………………………………</li>
                            </ol>
                            Demikian Rekomendasi ini dibuat untuk dipergunakan seperlunya.
                            </p>
                        </div>
                    </div>
                </li>
            </ol>
        </div>

        <div class="pernyataan mt-2">

        </div>

        <div class="sign mt-1">
            <table>
                <tr>
                    <td>Metro, ____________ 2023 </td>
                </tr>
                <tr>
                    <td>DIREKTUR <br> RSUD JENDERAL AHMAD YANI METRO</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td style="line-height: 100%">
                        <b class="text-decoration-underline">dr. FITRI AGUSTINA</b>
                        <br>
                        Pembina
                        <br>
                        NIP. 19810817 200902 2 007
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            $(window).load(function(e) {
                var isLoading = true;
                var element = document.getElementById('print-element');
                var opt = {
                    margin: 0,
                    filename: 'Surat Rekomendasi Seleksi Tubel Untuk Dokter.pdf',
                    image: { type: 'jpeg', quality: 0.98 },
                    jsPDF: { unit: 'in', format: 'A4', orientation: 'portrait' }
                };
                html2pdf(element, opt);

                setTimeout(function() { window.open(window.location, '_self').close(); }, 3000);
            });
        });
    </script>
</body>

</html>