<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <script>
        (() => {
            const getTheme = () => localStorage.theme ?? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')

            const applyTheme = () => {
                document.documentElement.classList.toggle('dark', getTheme() === 'dark')
            }

            applyTheme()
            document.addEventListener('livewire:navigated', applyTheme)
        })()
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="antialiased">
    <div class="flex items-center justify-center h-dvh bg-gray-50 px-4 dark:bg-gray-700">
        @yield('content')
    </div>
</body>
</html>
