<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.admin.head')

<body>
    <div class="app">
        @include('layouts.admin.navbar')
        <main class="px-5 px-sm-3 content">
            @yield('content')
        </main>
        @include("layouts.admin.footer")
    </div>

    @include('layouts.admin.script')
    @yield('script')
</body>

</html>