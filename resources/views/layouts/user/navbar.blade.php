<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary p-4" data-bs-theme="light"
    style="border-bottom: 1px solid #d5d5d5">
    <div class="container-fluid">
        <a class="navbar-brand fw-bolder text-dark" href="{{ route('user.beranda') }}">SKRIPSI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (auth()->check())
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('beranda') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('user.beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('izin-belajar*') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('user.izin-belajar.informasi') }}">Izin Belajar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('tugas-belajar*') ? 'active' : '' }}"
                        aria-current="page" href="{{ route('user.tugas-belajar.informasi') }}">Tugas Belajar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('pengajuanku') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('user.pengajuanku') }}">Pengajuanku</a>
                </li>
                @endif
            </ul>
            <div>
                @if (auth()->check())
                <div class="dropdown">
                    <div class="text-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Muhammad Sholeh
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ Request::is('profil') ? 'active' : '' }}"
                                href="{{ route('user.profil') }}"><i class="fa-solid fa-user me-2"></i>Profil</a>
                        </li>
                        <li class="text-dark"><a
                                class="dropdown-item notification {{ Request::is('notifikasi') ? 'active' : '' }}"
                                href="{{ route('user.notifikasi') }}">
                                <i class="fa-solid fa-bell me-2 position-relative" type="button">
                                    @if(
                                    \App\Models\Notifikasi::whereNip(auth()->user()->nip)->whereIsActive('1')->count()
                                    > 0)
                                    <span
                                        class="position-absolute top-0 start-150 translate-middle badge rounded-pill bg-danger"
                                        style="font-size: 6px">
                                        {{
                                        \App\Models\Notifikasi::whereNip(auth()->user()->nip)->whereIsActive('1')->count()
                                        }}
                                    </span>
                                    @endif
                                </i>
                                Notifikasi
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item notification" href="{{ route('user.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-right-from-bracket me-2"></i>Keluar</a>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                @else
                <a href="{{ route('user.login') }}" class="w-100">
                    <button class="btn btn-success w-100">Masuk</button>
                </a>
                @endif
            </div>
        </div>
    </div>
</nav>