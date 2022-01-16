<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @livewireStyles

    <title>TeyMii - Kirim Pesan Secara Rahasia</title>
</head>
<body>
    @include('partials.navbar')

    <div class="container wrapper-home py-4">
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
        <div class="container line"></div>
    </div>

    @livewireScripts
    <script src="{{ asset('js/copy.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>