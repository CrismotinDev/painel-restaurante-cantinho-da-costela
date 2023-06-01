<!DOCTYPE html>
<html lang="pt-br">
@include('layouts.css')

<body class="g-sidenav-show  bg-gray-100">

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        @includeIf('layouts.header')
        @yield('content')
        @includeIf('layouts.footer')
    </main>
    <a href="#" id="scrollToTopButton" title="Ir para o topo">
        <i class="fas fa-arrow-up"></i>
    </a>
</body>


@include('layouts.js')
@stack('postscript')

</html>
