<!DOCTYPE html>
<html lang="en" id="print-element">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat 2</title>

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
    <div class="p-4">
        <h5 class="text-center text-uppercase text-decoration-underline fw-bold">Surat Pernyataan</h5>
        <div class="mt-4">
            <h6 class="mb-0">Yang bertanda tangan dibawah ini:</h6>
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
        <div class="mt-3">
            <p style="text-align: justify">
                Sehubungan dengan permohonan tugas belajar mandiri saya, maka dengan ini
                menyatakan bahwa saya bersedia memenuhi ketentuan sebagai berikut :
            </p>
        </div>
        <div class="mt-2">
            <ol>
                <li>Kegiatan belajar dilaksanakan sendiri</li>
                <li>Seluruh biaya belajar ditanggung sendiri</li>
                <li>Tidak mengganggu kepentingan kedinasan</li>
                <li>Lembaga pendidikan sebagai tempat pendidikan adalah Universitas ………………</li>
                <li>Tidak akan menuntut jabatan apabila tidak sesuai dengan tugas dan fungsi unit kerja</li>
                <li>Tidak akan menuntut jabatan apabila telah menyelesaikan pendidikan</li>
            </ol>
        </div>
        <div class="mt-3">
            <p style="text-align: justify">
                Demikian surat pernyataan ini saya buat dengan sebenarnya, apabila dikemudian hari
                ternyata surat ini tidak benar, maka saya bersedia mempertanggungjawabkan secara
                hukum dimuka pengadilan.
            </p>
        </div>
        <div class="mt-4 d-flex justify-content-end">
            <span class="date-sign text-end">Metro, {{ Carbon\Carbon::parse($time_now)->format('d F Y') }}</span>
        </div>
        <div class="mt-2 d-flex justify-content-center">
            <span>Mengetahui</span>
        </div>
        <div class="mt-2 d-flex justify-content-center">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <td class="text-center w-50">DIREKTUR RSUD JEND A YANI <br>
                            KOTA METRO</td>
                        <td class="text-center w-50">Yang Bersangkutan</td>
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
                        <td class="text-center w-50">
                            <span class="fw-bold text-decoration-underline">dr. Fitri Agustina</span>
                            <br>
                            Pembina
                            <br>
                            NIP.19810817 200902 2 007
                        </td>
                        <td class="text-center w-50">
                            {{ $user->nama }}
                            <br>
                            NIP.{{ $user->nip }}
                        </td>
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
                        filename: 'Surat Permohonan Izin Belajar - 2.pdf',
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