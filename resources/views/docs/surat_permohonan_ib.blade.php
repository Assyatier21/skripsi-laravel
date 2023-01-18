<!DOCTYPE html>
<html lang="en" id="print-element">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Permohonan Izin Belajar</title>

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

        .detail-direktur {
            margin-left: 6rem;
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
        <div class="row">
            <div class="col-8">
                <div>
                    <span>Nomor</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>:</span>
                    <span>800/xx/LL-02/2023</span>
                </div>
                <div>
                    <span>Lampiran</span>
                    &nbsp;&nbsp;
                    <span>:</span>
                    <span>-</span>
                </div>
                <div>
                    <span>Perihal</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>:</span>
                    <span style="text-decoration: underline">Permohonan Tugas Belajar Mandiri</span>
                </div>
            </div>
            <div class="col-4">
                <span>Metro, xx Januari 2023</span> <br>
                <span>Kepada Yth,</span><br>
                <span>Bpk. Walikota Metro</span><br>
                <span>Cq. Kepala BKPSDM Kota Metro</span><br>
            </div>
        </div>
    </div>

    <div class="detail-direktur mt-4">
        <h6 class="">Dengan hormat,</h6>
        <h6 class="mb-0">Bersama ini kami sampaikan berkas permohonan tugas belajar mandiri pegawai
            RSUD Jenderal Ahmad Yani Metro :</h6>
        <div class="p-2">
            <table class="w-100 table table-bordered border-dark">
                <thead class="text-center">
                    <th>No</th>
                    <th>Nama/NIP</th>
                    <th>Pangkat/Gol</th>
                    <th>Keterangan</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1.</td>
                        <td style="width: 40%">
                            Nama : {{ $user->nama }} <br>
                            NIP. {{ $user->nip }}
                        </td>
                        <td>{{ $user->pangkat_golongan }}</td>
                        <td>Profesi …………… di
                            Universitas………………</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pernyataan mt-2">
            <p>
                Pada prinsipnya kami tidak berkeberatan yang bersangkutan untuk meningkatkan
                pendidikannya, maka bersama ini mengajukan permohonan mengikuti tugas belajar
                mandiri Profesi…………….. di Universitas ……………….. Tahun Akademik
                ……………….
                <br>
                Sebagai bahan pertimbangan Bapak dengan ini disampaikan :
                <br>
                1. Formulir Identitas Pegawai<br>
                2. Surat Permohonan Tugas Belajar Mandiri<br>
                3. Surat Pernyataan Pribadi Pegawai<br>
                4. Foto Copy SK CPNS<br>
                5. Foto Copy SK Pangkat Terakhir<br>
                6. Foto Copy Karpeg<br>
                7. Foto Copy SKP terakhir<br>
                8. Foto Copy Ijazah terakhir<br>
                9. Pernyataan Akreditasi Kampus minimal B<br>
            </p>
            <p>
                Demikian kami sampaikan, atas perkenan bapak diucapkan terima kasih.
            </p>
        </div>
    </div>


    <div class="sign">
        <table>
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
                        filename: 'Surat Permohonan Izin Belajar.pdf',
                        image: { type: 'jpeg', quality: 0.98 },
                        // html2canvas: { scale: 2 },
                        jsPDF: { unit: 'in', format: 'A4', orientation: 'portrait' }
                    };
                    html2pdf(element,opt);
    
                    setTimeout(function() { window.open(window.location, '_self').close(); }, 3000);
                });
            });
    </script>
</body>

</html>