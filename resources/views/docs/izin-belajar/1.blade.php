<!DOCTYPE html>
<html lang="en" id="print-element">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat 1</title>

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

        .metro img,
        .pas-foto img {
            width: 100px;
            height: 133px;
            object-fit: contain !important;
        }
    </style>
</head>

<body class="p-5">
    <div class="d-flex justify-content-between">
        <div class="col-3 metro">
            <img src="{{ asset('assets/images/docs/MetroJaya.png') }}" alt="">
        </div>
        <div class="col-3 pas-foto d-flex justify-content-end">
            <img src="{{ asset('storage/pas_foto/' . $user->pas_foto) }}" alt="">
        </div>
    </div>
    <div class="mt-3">
        <table class="table table-bordered">
            <tbody class="">
                <tr>
                    <th scope="col" class="text-uppercase text-center">1</th>
                    <th scope="col" class="text-uppercase">Nama</th>
                    <th scope="col" class="text-uppercase">{{ $user->nama }}</th>
                </tr>

                <tr>
                    <th scope="col" class="text-uppercase text-center">2</th>
                    <th scope="col" class="text-uppercase">Jenis Kelamin</th>
                    <th scope="col" class="text-uppercase">{{ $user->jenis_kelamin }}</th>
                </tr>

                <tr>
                    <th scope="col" class="text-uppercase text-center">3</th>
                    <th scope="col" class="text-uppercase">Tempat / Tanggal Lahir</th>
                    <th scope="col" class="text-uppercase">{{ $user->tempat_lahir }} / {{
                        Carbon\Carbon::parse($user->tanggal_lahir)->format('d M Y') }}</th>
                </tr>

                <tr>
                    <th scope="col" class="text-uppercase text-center">4</th>
                    <th scope="col" class="text-uppercase">Satuan Kerja / Unit</th>
                    <th scope="col" class="text-uppercase">RSUD Jenderal Ahmad Yani Metro</th>
                </tr>
                <tr>
                    <th scope="col" class="text-uppercase text-center">5</th>
                    <th scope="col" class="text-uppercase">Instansi</th>
                    <th scope="col" class="text-uppercase">RSUD Jenderal Ahmad Yani Metro</th>
                </tr>
                <tr>
                    <th scope="col" class="text-uppercase text-center">6</th>
                    <th scope="col" class="text-uppercase">Agama</th>
                    <th scope="col" class="text-uppercase">{{ $user->agama }}</th>
                </tr>
                <tr>
                    <th scope="col" class="text-uppercase text-center">7</th>
                    <th scope="col" class="text-uppercase">Program Studi</th>
                    <th scope="col" class="text-uppercase"></th>
                </tr>
                <tr>
                    <th scope="col" class="text-uppercase text-center">8</th>
                    <th scope="col" class="text-uppercase">Jurusan</th>
                    <th scope="col" class="text-uppercase"></th>
                </tr>
                <tr>
                    <th scope="col" class="text-uppercase text-center">9</th>
                    <th scope="col" class="text-uppercase">Nama PTN/PTS</th>
                    <th scope="col" class="text-uppercase"></th>
                </tr>
                <tr>
                    <th scope="col" class="text-uppercase text-center">10</th>
                    <th scope="col" class="text-uppercase">Nomor Akreditasi</th>
                    <th scope="col" class="text-uppercase"></th>
                </tr>
                <tr>
                    <th scope="col" class="text-uppercase text-center">11</th>
                    <th scope="col" class="text-uppercase">Tahun Akademik</th>
                    <th scope="col" class="text-uppercase"></th>
                </tr>
                <tr>
                    <th scope="col" class="text-uppercase text-center">12</th>
                    <th scope="col" class="text-uppercase">Alamat Email</th>
                    <th scope="col" class="text-uppercase">{{ $user->email }}</th>
                </tr>
                <tr>
                    <th scope="col" class="text-uppercase text-center">13</th>
                    <th scope="col" class="text-uppercase">Nomor Handphone</th>
                    <th scope="col" class="text-uppercase">{{ $user->no_hp }}</th>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mt-4 d-flex justify-content-end">
        <span class="date-sign text-end">Metro, {{ Carbon\Carbon::parse($time_now)->format('d M Y') }}</span>
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
                        filename: 'Surat Permohonan Izin Belajar - 1.pdf',
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