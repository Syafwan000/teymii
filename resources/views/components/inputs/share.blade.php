<div class="flex justify-center items-center gap-4">
    <button x-data="share" @click="copyLink" :disabled="clicked" type="button" id="share-link" data-clipboard-text="{{ url()->current() }}" class="min-w-24 transition-all duration-300 ease-in-out flex justify-center items-center gap-1 text-sm font-medium bg-gray-200 rounded-md px-3 py-1 hover:bg-gray-300 focus:bg-blue-600 focus:text-white disabled:bg-blue-600 disabled:text-white">
        <span class="icon-[mdi--link-variant] w-5 h-5"></span>
        <span x-text="text"></span>
    </button>
    <span class="font-semibold">|</span>
    <div class="flex items-center gap-1.5">
        <a href="https://api.whatsapp.com/send?text=Send%20message%20to%20{{ $user->name }}%20as%20anonymous%20on%20TeyMii%20🗣️🗣️🔥%20{{ url()->current() }}" target="_blank" class="flex justify-center items-center bg-gray-200 rounded-full w-8 h-8 hover:bg-gray-300">
            <span class="icon-[mdi--whatsapp] w-5 h-5"></span>
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="flex justify-center items-center bg-gray-200 rounded-full w-8 h-8 hover:bg-gray-300">
            <span class="icon-[jam--facebook] w-5 h-5"></span>
        </a>
        <a href="https://t.me/share/url?url={{ url()->current() }}&text=Send%20message%20to%20{{ $user->name }}%20as%20anonymous%20on%20TeyMii%20🗣️🗣️🔥" target="_blank" class="flex justify-center items-center bg-gray-200 rounded-full w-8 h-8 hover:bg-gray-300">
            <span class="icon-[mingcute--telegram-fill] w-5 h-5"></span>
        </a>
        <a href="https://x.com/intent/tweet?url={{ url()->current() }}&text=Send%20message%20to%20{{ $user->name }}%20as%20anonymous%20on%20TeyMii%20🗣️🗣️🔥" target="_blank" class="flex justify-center items-center bg-gray-200 rounded-full w-8 h-8 hover:bg-gray-300">
            <span class="icon-[pajamas--twitter] w-5 h-5"></span>
        </a>
    </div>
</div>
