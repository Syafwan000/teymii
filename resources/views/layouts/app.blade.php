<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">
    <title>{{ $title ?? env('APP_NAME') }}</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="relative flex flex-col justify-between max-w-screen-sm min-h-screen mx-auto bg-gray-50">
        <div class="space-y-5">
            <livewire:partials.navbar />
            <main>{{ $slot }}</main>
        </div>
        <livewire:partials.footer />
    </div>
    <a href="#" target="_blank" class="fixed bottom-4 right-4 flex items-center gap-2 px-4 py-2 text-sm text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700">
        <span class="icon-[fluent--chat-28-filled] w-5 h-5"></span>
        Send Feedback
    </a>
    @livewireScripts
</body>
</html>
