<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="relative flex flex-col justify-between max-w-screen-sm min-h-screen mx-auto bg-gray-50">
        <div class="space-y-5">
            @include('partials.navbar')
            <main>@yield('content')</main>
        </div>
        @include('partials.footer')
    </div>
    <a href="#" target="_blank" class="fixed bottom-4 right-4 flex items-center gap-2 px-4 py-2 text-sm text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700">
        <span class="icon-[fluent--chat-28-filled] w-5 h-5"></span>
        Send Feedback
    </a>
    @livewireScripts
</body>
</html>
