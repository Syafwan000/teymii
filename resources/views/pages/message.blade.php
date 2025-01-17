<section class="space-y-10 text-center px-8">
    <div class="flex flex-col gap-6 text-slate-700">
        <div class="flex flex-col gap-3">
            <span class="font-semibold">Send message to</span>
            <h1 class="max-w-lg mx-auto inline-block text-2xl font-extrabold bg-gradient-to-br from-blue-500 via-violet-500 to-rose-500 bg-clip-text text-transparent">{{ $user->name }}</h1>
            @if($user->desc)
                <p class="leading-relaxed">{{ $user->desc }}</p>
            @endif
        </div>
        <div class="space-y-10">
            <livewire:components.inputs.share />
            <livewire:components.forms.send-message :user="$user" />
            <livewire:components.forms.view-message :user="$user" />
        </div>
    </div>
</section>
