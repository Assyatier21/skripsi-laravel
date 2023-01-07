<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary p-4" data-bs-theme="light"
    style="border-bottom: 1px solid #d5d5d5">
    <div class="container-fluid">
        <a class="navbar-brand fw-bolder text-dark" href="{{ route('admin.beranda') }}">ADMIN SKRIPSI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('admin/beranda') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('admin.beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <div class="nav-link text-dark" aria-current="page">|</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('admin/tugas-belajar') ? 'active' : '' }}"
                        aria-current="page" href="{{ route('admin.tugas-belajar.index') }}">Verifikasi Tugas Belajar</a>
                </li>
                <li class="nav-item">
                    <div class="nav-link text-dark" aria-current="page">|</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('admin/izin-belajar') ? 'active' : '' }}"
                        aria-current="page" href="{{ route('admin.izin-belajar.index') }}">Verifikasi Izin Belajar</a>
                </li>
            </ul>
            <div>
                <div class="dropdown-center">
                    <div class="text-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false" aria-expanded="false">
                        Administrator System
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item notification" href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class=" fa-solid fa-right-from-bracket me-2"></i>Keluar</a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>