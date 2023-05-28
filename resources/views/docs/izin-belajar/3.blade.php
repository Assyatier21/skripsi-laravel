<!DOCTYPE html>
<html lang="en" id="print-element">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat 3</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <style>
        body {
            margin: 0;
            /* font-size: 13px; */
            font-family: "Times New Roman", Times, serif !important;
        }
    </style>
</head>

<body class="p-5">
    <div class="p-5">
        <div class="d-flex justify-content-between">
            <div class="left">
                <span>
                    Perihal: Permohonan Tugas Belajar Mandiri
                </span>
            </div>
            <div class="right">
                <span>
                    Direktur <br>
                    RSUD Jend. A. Yani Metro <br>
                    di Metro
                </span>
            </div>
        </div>
        <div class="mt-4">
            <span>Dengan hormat,</span>
            <br>
            <h6 class="mb-0">Saya yang bertanda tangan dibawah ini:</h6>
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
                        <td>Unit Kerja</td>
                        <td>:</td>
                        <td>RSUD Jenderal Ahmad Yani Metro</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mt-2">
            <p>Bersama ini saya mengajukan permohonan izin belajar kepada Bapak/ Ibu untuk melanjutkan pendidikan
                program
                studi {{ $ib->program_studi }} di Universitas {{ $ib->nama_institusi }}</p>
            <p>Sebagai bahan pertimbangan saya lampirkan: <br>
            <ol>
                <li>Fotocopy SK Terakhir</li>
                <li>Fotocopy Ijazah Terakhir</li>
            </ol>
            </p>
            <p>
                Demikian atas perhatian dan izin Bapak/ Ibu saya ucapkan terima kasih.
            </p>
        </div>

        <div class="mt-2 d-flex justify-content-center">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="text-center w-25">Mengetahui <br>
                            Kepala Instalasi ……………………</td>
                        <td></td>
                        <td class="text-center w-25">Hormat Saya</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-start w-25">
                            <span class="fw-bold text-decoration-underline">Nama Jelas:</span>
                            <br>
                            NIP.
                        </td>
                        <td></td>
                        <td class="text-center w-25">
                            {{ $user->nama }}
                            <br>
                            NIP.{{ $user->nip }}
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="text-center">Mengetahui <br>
                            Kepala Bidang ……………………</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><br><br><br></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <span class="fw-bold text-decoration-underline">Nama Jelas:</span>
                            <br>
                            NIP.
                        </td>
                        <td></td>
                    </tr>

                </tbody>
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
                        filename: 'Surat Permohonan Izin Belajar - 3.pdf',
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