@extends('layouts.app')

@section('content')
    <section class="space-y-10 text-center px-6">
        <div class="space-y-4 text-slate-700">
            <h1 class="max-w-lg mx-auto text-2xl font-extrabold">Send and Get your <span class="underline underline-offset-[6px] decoration-wavy decoration-blue-600 cursor-default">Anonymous</span> message!</h1>
            <p class="leading-relaxed">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, minus deserunt corrupti excepturi praesentium illum ut amet eum nisi deleniti? Reiciendis, minus deserunt corrupti</p>
        </div>
        <livewire:create-message />
    </section>
@endsection
