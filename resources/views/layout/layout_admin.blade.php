<!doctype html>
<html lang="es">
<head>
    @include('layout/partials/head')
</head>
<body>

@include('layout/partials/header')


<div class="cont1366 cont-flex">

    <div class="col-1 left w_padding">

        @include('layout/partials/admin_sidebar')

    </div>

    <div class="col-5 w_padding">

        @include('layout/partials/messages')

        @yield('content')

    </div>

</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/edc-helpers.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@yield('scripts')

</body>
</html>
