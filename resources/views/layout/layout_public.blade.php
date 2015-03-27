<!doctype html>
<html lang="es">
<head>
    @include('layout/partials/head')
</head>
<body>


@include('layout/partials/header')


<div class="cont1366 cont-flex">

    @yield('content')

</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/edc-helpers.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@yield('scripts')

</body>
</html>
