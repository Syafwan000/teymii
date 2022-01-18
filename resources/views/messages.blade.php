@extends('layout.main')

@section('title')

{{ $title }}

@endsection

@section('content')

<div class="text-center">
    <h3 class="title">Berikan Pesan Kepada <span class="highlight-user">{{ $user->name }}</span></h3>
    @if($user->desc)
        <p class="desc mb-2">{{ $user->desc }}</p>
    @else
        <p class="desc mb-2">Berikan pesan kepadanya!</p>
    @endif
    <div class="input-group mb-0">
        <input type="text" class="form-control shadow-none" id="url" value="{{ url()->current() }}">
        <button class="btn btn-dark shadow-none" data-clipboard-target="#url"><i class="fas fa-clipboard"></i></button>
    </div>
    <label class="label-remind mb-3"><i>*simpan link diatas</i></label>
    <div class="social-media mb-3">
        <a href="{{ $facebook }}" target="_blank" class="btn btn-facebook shadow-none">
            <i class="fab fa-facebook-f"></i>&nbsp;<span class="social-media-text">Facebook</span>
        </a>
        <a href="{{ $whatsapp }}" target="_blank" class="btn btn-whatsapp mx-1 shadow-none">
            <i class="fab fa-whatsapp"></i>&nbsp;<span class="social-media-text">WhatsApp</span>
        </a>
        <a href="{{ $telegram }}" target="_blank" class="btn btn-telegram shadow-none">
            <i class="fab fa-telegram-plane"></i>&nbsp;<span class="social-media-text">Telegram</span>
        </a>
    </div>
</div>

<div class="container line"></div>

<livewire:send-message :user="$user"></livewire:send-message>

<div class="container line"></div>

<livewire:show-message :user="$user"></livewire:show-message>

@endsection