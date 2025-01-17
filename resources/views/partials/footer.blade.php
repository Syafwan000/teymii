<footer class="flex flex-col gap-2 text-center text-sm px-8 pt-12 pb-4">
    <div class="flex justify-center gap-3">
        <a wire:navigate href="{{ route('about') }}" wire:current="underline underline-offset-2 decoration-wavy" class="relative text-blue-700 font-medium">About</a>
        <a wire:navigate href="{{ route('contact') }}" wire:current="underline underline-offset-2 decoration-wavy" class="relative text-blue-700 font-medium">Contact</a>
    </div>
    <p>&copy; {{ date('Y') }} TeyMii. Crafted with 💖</p>
</footer>
