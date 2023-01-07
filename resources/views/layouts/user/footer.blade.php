<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-dark" style="border-top: solid 1px #d5d5d5">
    <section>
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem text-uppercase me-3"></i>Tentang Kami
                    </h6>
                    <p style="text-align: justify" class="desc-footer">
                        SI-DILAN merupakan website khusus pegawai didalam rumah sakit
                        Siti Fatimah yang digunakan dalam rangka mengembangkan mutu dan
                        kualitas dari pegawai agar bisa membuat rumah sakit bisa
                        bersaing dengan rumah sakit se-Indonesia
                    </p>
                </div>

                @if (auth()->check())
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Navigasi
                    </h6>
                    <p>
                        <a href="{{ route('user.beranda') }}" class="text-reset">Beranda</a>
                    </p>
                    <p>
                        <a href="{{ route('user.tugas-belajar.informasi') }}" class="text-reset">Tugas Belajar</a>
                    </p>
                    <p>
                        <a href="{{ route('user.izin-belajar.informasi') }}" class="text-reset">Izin Belajar</a>
                    </p>
                    <p>
                        <a href="{{ route('user.pengajuanku') }}" class="text-reset">Pengajuanku</a>
                    </p>
                </div>
                @endif

                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Hubungi Kami</h6>
                    <p><i class="fas fa-home me-3"></i> Jl. Kol.
                        H. Burlian, Suka Bangun, Kec. Sukarami</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                </div>
            </div>
        </div>
    </section>

    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright:
        <span class="text-reset fw-bold">Deo Alif Alfitrah</span>
    </div>
</footer>
<!-- Footer -->