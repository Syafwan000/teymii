<div class="max-w-md mx-auto flex flex-col gap-5">
    @if($messages->count() > 0)
        <div class="flex justify-between">
            <p class="font-semibold">{{ $messages->count() }} Messages</p>
            <button wire:click="refreshMessage" class="flex items-center gap-1">
                <span class="icon-[humbleicons--refresh] w-5 h-5"></span>
                Refresh
            </button>
        </div>
        @foreach($messages as $message)
            <div id="message-card" class="flex flex-col gap-3 justify-between text-left w-full bg-gray-200 rounded-lg min-h-24 p-5 shadow-md">
                <div class="space-y-1">
                    <h3 class="font-bold">{{ $message->user->anon_name ?? 'Anonymous' }}</h3>
                    <p>"{{ $message->message }}"</p>
                </div>
                <span class="text-xs text-right">{{ $message->created_at->diffForHumans() }}</span>
                @if($message->song)
                    <div style="left: 0; width: 100%; height: 80px; position: relative;"><iframe src="https://open.spotify.com/embed/track/{{ $message->song }}?utm_source=oembed" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen allow="clipboard-write; encrypted-media; fullscreen; picture-in-picture;"></iframe></div>
                @endif
            </div>
        @endforeach
    @else
        <p class="font-semibold tracking-wide text-slate-400 cursor-default py-20">No Messages</p>
    @endif
</div>
