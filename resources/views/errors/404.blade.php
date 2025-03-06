@extends('layouts.errors.layout')

@section('title', 'Page not found')

@section('content')
    <div class="max-w-[350px] w-full text-slate-700 flex flex-col gap-6 text-center dark:text-slate-300">
        <div class="space-y-2">
            <h1 class="inline-block text-5xl text-transparent bg-clip-text font-extrabold bg-gradient-to-br from-blue-500 via-violet-500 to-rose-500 dark:from-pink-100 dark:via-rose-300 dark:to-rose-400">404</h1>
            <h3 class="text-2xl font-bold">Page not found</h3>
            <p>The page was not found or the message time has expired</p>
        </div>
        <img class="w-52 h-52 mx-auto" src="{{ asset('assets/gif/cat-awo.gif') }}" alt="Awoooo">
        <a href="{{ route('home') }}" class="transition-all duration-300 text-center ease-in-out px-4 py-2 text-sm text-white bg-blue-600 rounded-full shadow-lg hover:bg-blue-700 dark:shadow-blue-500/30">
            Return to home
        </a>
    </div>
@endsection
