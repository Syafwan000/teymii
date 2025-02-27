<section class="space-y-10 text-center px-8">
    <div class="flex flex-col gap-6 text-slate-700 dark:text-slate-300">
        <div class="flex flex-col gap-3">
            <span class="font-semibold">Send message to</span>
            <h1 class="motion-preset-confetti motion-duration-2000 max-w-lg mx-auto inline-block text-2xl font-extrabold bg-gradient-to-br from-blue-500 via-violet-500 to-rose-500 bg-clip-text text-transparent dark:from-white dark:via-violet-200 dark:to-blue-200">{{ $user->name }}</h1>
            @if($user->desc)
                <p class="leading-relaxed">{{ $user->desc }}</p>
            @endif
        </div>
        <div class="space-y-10">
            <livewire:components.inputs.share :user="$user" />
            @if(session()->has('instance_user'))
                @if(session('instance_user')->slug !== $user->slug)
                    <livewire:components.forms.send-message :user="$user" />
                @endif
            @else
                <livewire:components.forms.send-message :user="$user" />
            @endif
            <livewire:components.forms.view-message :user="$user" />
        </div>
    </div>
</section>
