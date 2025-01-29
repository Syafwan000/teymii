<footer class="flex flex-col gap-2 text-center text-sm px-8 pt-12 pb-4">
    <div class="flex justify-center gap-3">
        <a wire:navigate href="{{ route('about') }}" wire:current="underline underline-offset-2 decoration-wavy" class="text-blue-700 font-medium">About</a>
        <a wire:navigate href="{{ route('contact') }}" wire:current="underline underline-offset-2 decoration-wavy" class="text-blue-700 font-medium">Contact</a>
        <a href="https://tally.so" target="_blank" class="flex gap-0.5 text-blue-700 font-medium lg:hidden">
            Send Feedback
            <span class="icon-[material-symbols--arrow-insert-rounded] -scale-x-100 w-5 h-5"></span>
        </a>
    </div>
    <p>&copy; {{ date('Y') }} TeyMii. Crafted with 💖</p>
</footer>
