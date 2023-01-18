<!DOCTYPE html>
<html lang="en" id="print-element">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat ABK</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            margin: 0;
            font-family: "Times New Roman", Times, serif !important;
        }

        .alamat {
            margin-top: 8px;
            font-size: 14px;
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
                <h5 class="fw-bold text-center mb-0">UPTD RSUD JENDERAL AHMAD YANI METRO</h5>
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

        <div class="title-div mt-4">
            <h5 class="title">SURAT PERNYATAAN KEBUTUHAN <br>
                <span class="text-decoration-underline">BERDASARKAN ANALISIS JABATAN DAN ANALISIS BEBAN KERJA<br>
                    TAHUN 2022</span>
            </h5>
        </div>

        <div class="row nomor-surat text-center">
            <span>Nomor: 800/ _________ /LL-02/2023</span>
        </div>

        <div class="detail-direktur mt-4">
            <h6 class="mb-0">Yang bertanda tangan di bawah ini:</h6>
            <div class="p-2">
                <table class="w-100">
                    <tr>
                        <td>Nama</td>
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
        </div>

        <div class="detail-direktur mt-2">
            <h6 class="mb-0">Menyatakan dengan sesungguhnya, Pegawai Negeri Sipil:</h6>
            <div class="p-2">
                <table class="w-100">
                    <tr>
                        <td>Nama</td>
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
                        <td>Jabatan</td>
                        <td>:</td>
                        <td>{{ $user->jabatan }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="pernyataan mt-2">
            <p>Mengajukan Permohonan untuk dapat diterbitkan surat izin belajar pada jenjang S1 Keperawatan dan Profesi
                <b>dengan
                    pertimbangan basic Pendidikan yang akan ditempuh oleh yang bersangkutan (Pendidikan…..) dibutuhkan
                    sesuai
                    Analisis
                    Jabatan dan Analisis Beban Kerja.</b>
            </p>
            <p>Demikian surat pernyataan ini dibuat dengan mengingat akan kebutuhan tenaga dimaksud dan dipergunakan
                sebagaimana
                mestinya.</p>
        </div>

        <div class="sign mt-3">
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
                    filename: 'Surat ABK.pdf',
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