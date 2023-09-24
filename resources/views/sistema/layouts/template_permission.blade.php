<!doctype html>
<html lang="en" data-bs-theme="auto"  class="h-100" data-bs-theme="auto">
<head>
    <script src="/public/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Neiberth Lucena">
    <meta name="generator" content="Neiberth 0.2023.1">

    <title>{{ config('app.name', 'Sistema Junta Comercial') }}</title>
    <!-- Fonts -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('/icons/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" href="{{ asset('/icons/favicon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('/icons/favicon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="manifest" href="{{ asset('/icons/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('/icons/safari-pinned-tab.svg') }}" color="#7952b3">
    <link rel="icon" href="{{ asset('/icons/favicon.ico') }}">
    <meta name="theme-color" content="#7952b3">

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/style_permission.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/cover.css')}}" rel="stylesheet">

    <!-- Scripts -->
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="d-flex h-100 text-center text-bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            @include('sistema.layouts._partial.permission_nav')
        </header>

        <main class="px-3">
            @yield('content')
        </main>

        <footer class="mt-auto text-white-50">
            @include('sistema.layouts._partial.permission_footer')
        </footer>
    </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
<script src="https://kit.fontawesome.com/5416d2943c.js" crossorigin="anonymous"></script>
</body>
</html>
