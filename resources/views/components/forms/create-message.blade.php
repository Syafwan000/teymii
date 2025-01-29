<div class="max-w-md mx-auto">
    @if(session()->has('instance_user'))
        <div class="inline-flex flex-col gap-6">
            <div class="flex justify-center items-center gap-4">
                <span class="icon-[mingcute--mail-ai-fill] motion-preset-seesaw-md w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-500"></span>
                <div class="inline-flex flex-col cursor-default">
                    <p class="max-w-max mx-auto text-xl font-semibold">{{ session('instance_user')->name }}</p>
                    <span class="text-sm">{{ $total_messages }} Messages</span>
                </div>
            </div>
            <a wire:navigate href="{{ route('message', session('instance_user')->slug) }}" class="transition-all duration-300 ease-in-out min-w-56 inline-flex justify-center gap-2 items-center bg-gradient-to-br from-blue-600 to-indigo-500 text-white font-extrabold px-6 py-3 rounded-lg shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/60 hover:opacity-80">
                <span wire:loading.remove>My Messages</span>
                <i wire:loading.remove class="icon-[stash--paperplane-solid] w-6 h-6 text-white"></i>
                <i wire:loading class="icon-[line-md--loading-twotone-loop] w-6 h-6 text-white"></i>
            </a>
        </div>
    @else
        <form wire:submit.prevent="create" class="space-y-6" onkeydown="return event.key != 'Enter';">
            <div class="flex flex-col gap-7">
                <livewire:components.inputs.field
                    wire:model="name"
                    label="Name"
                    trigger="name"
                    type="text"
                    :error="$errors->has('name') ? $errors->first('name') : null"
                    placeholder="e.g. syafwan" />
                <livewire:components.inputs.field
                    wire:model="anon_name"
                    label="Anon Name (optional)"
                    trigger="anon_name"
                    type="text"
                    :error="$errors->has('anon_name') ? $errors->first('anon_name') : null"
                    placeholder="e.g. fans gwe" />
                <livewire:components.inputs.textarea
                    wire:model="description"
                    label="Description (optional)"
                    trigger="desc"
                    :error="$errors->has('description') ? $errors->first('description') : null"
                    placeholder="e.g. berikan aku hujatan"
                    maxlength="120" />
            </div>
            <button type="submit" class="transition-all duration-300 ease-in-out min-w-56 inline-flex justify-center gap-2 items-center bg-gradient-to-br from-blue-600 to-indigo-500 text-white font-extrabold px-6 py-3 rounded-lg shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/60 hover:opacity-80">
                <span wire:loading.remove>Get your message</span>
                <i wire:loading.remove class="icon-[stash--paperplane-solid] w-6 h-6 text-white"></i>
                <i wire:loading class="icon-[line-md--loading-twotone-loop] w-6 h-6 text-white"></i>
            </button>
        </form>
    @endif
</div>
