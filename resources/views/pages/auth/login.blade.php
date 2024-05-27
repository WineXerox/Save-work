<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'บันทึกงานซ่อม' }}</title>

        <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/global.css') }}">
        <script src="{{ asset('jquery/jquery-3.7.1.js') }}" ></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        @livewireStyles()
    </head>
    <body>

        <main class="d-flex">
            <div class="container">
                @livewire('auth.login')
            </div>
        </main>

        <script src="{{ asset('bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/global.js') }}"></script>
        <script src="{{ asset('js/swal.js') }}"></script>

        @livewireScripts()
    </body>
</html>
