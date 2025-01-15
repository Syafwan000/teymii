<form wire:submit="create" class="max-w-md mx-auto space-y-6">
    <div class="flex flex-col gap-7">
        <div class="space-y-1">
            <livewire:components.inputs.field
                wire:model="name"
                label="Name"
                trigger="name"
                type="text"
                error="{{ $errors->first('name') }}"
                placeholder="e.g. syafwan" />
            @error('name')
                <p class="text-left text-sm text-rose-600 pl-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="space-y-0">
            <livewire:components.inputs.textarea
                wire:model="description"
                label="Description (optional)"
                trigger="desc"
                placeholder="e.g. berikan aku hujatan" />
            @error('description')
                <p class="text-left text-sm text-rose-600 pl-1">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <button type="submit" class="transition-all duration-300 ease-in-out min-w-56 inline-flex justify-center gap-2 items-center bg-gradient-to-br from-blue-600 to-indigo-500 text-white font-extrabold px-6 py-3 rounded-lg shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/60 hover:opacity-80">
        <span wire:loading.remove>Get your message</span>
        <i wire:loading.remove class="icon-[stash--paperplane-solid] w-6 h-6 text-white"></i>
        <i wire:loading class="icon-[line-md--loading-twotone-loop] w-6 h-6 text-white"></i>
    </button>
</form>
