<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.user.head')

<body>
    <div class="app">
        @include('layouts.user.navbar')
        <main class="px-5 px-sm-3 content">
            @yield('content')
        </main>
        @include("layouts.user.footer")
    </div>

    @include('layouts.user.script')
    @yield('script')
</body>

</html>