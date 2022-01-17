@extends('layout.main')

@section('content')

<livewire:create-message></livewire:create-message>

<div class="container line"></div>

<p class="sub-title mt-4 mb-1 text-center">Bagikan <span class="teymii">TeyMii</span> di sosial media</p>
<div class="container text-center social-media my-2">
    <a href="{{ $facebook }}" target="_blank" class="btn btn-facebook me-1 shadow-none">
        <i class="fab fa-facebook-f"></i>&nbsp;<span class="social-media-text">Facebook</span>
    </a>
    <a href="{{ $whatsapp }}" target="_blank" class="btn btn-whatsapp shadow-none">
        <i class="fab fa-whatsapp"></i>&nbsp;<span class="social-media-text">WhatsApp</span>
    </a>
</div>
<div class="container text-center social-media mb-4">
    <a href="{{ $telegram }}" target="_blank" class="btn btn-telegram me-1 shadow-none">
        <i class="fab fa-telegram-plane"></i>&nbsp;<span class="social-media-text">Telegram</span>
    </a>
    <input type="hidden" id="URL" value="{{ url()->current() }}">
    <a class="btn btn-link shadow-none" onclick="copyLink()">
        <i class="fas fa-link"></i>&nbsp;<span class="social-media-text" id="copyText">Salin Link</span>
    </a>
</div>

<div class="container text-center mt-4">
    <p class="label-footer mb-0">TeyMii &copy; 2022</p>
    <p class="label-footer mb-0">Made by <a class="dev" href="https://www.instagram.com/safvvan_/" target="_blank">Muhammad Syafwan Ardiansyah</a></p>
</div>

@endsection