<div class="max-w-md mx-auto flex flex-col gap-5">
    @if($messages->count() > 0)
        <div class="flex justify-between">
            <p class="font-semibold">{{ $messages->count() }} Messages</p>
            <p>xxxxxxxx</p>
        </div>
        @foreach($messages as $message)
            <div class="relative flex flex-col gap-3 justify-between text-left w-full bg-gray-200 rounded-lg min-h-24 p-5 shadow-md">
                <span class="icon-[arcticons--anonymousmessenger-alt] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 opacity-10 w-16 h-16"></span>
                <div class="space-y-1">
                    <h3 class="font-bold">{{ $message->user->anon_name }}</h3>
                    <p>"{{ $message->message }}"</p>
                </div>
                <span class="text-xs text-right">{{ $message->created_at->diffForHumans() }}</span>
            </div>
        @endforeach
    @else
        <p class="font-semibold tracking-wide text-slate-400 py-20">No Messages</p>
    @endif
</div>
