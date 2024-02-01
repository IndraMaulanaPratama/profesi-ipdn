<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicons -->
    <link href="{{ asset('assets/homepage/images/favicon.ico') }}" rel="icon" />
    <link href="{{ asset('assets/homepage/images/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <title>{{ $title ?? 'Page Title' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('assets/admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/admin/vendor/quill/quill.snow.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('assets/admin/vendor/simple-datatables/style.css') }}" rel="stylesheet"> --}}

    <!-- Template Main CSS File -->
    {{-- <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet"> --}}


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" /> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>

    {{-- Navbar --}}
    <x-home.templates.navbar />

    {{-- Content --}}
    <div class="container-fluid">
        {{ $slot }}
    </div>

    {{-- Footer --}}
    <x-home.templates.footer />


    <!-- Template Main JS File -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

</body>

</html>
