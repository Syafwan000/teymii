<form wire:submit="create" class="max-w-lg mx-auto space-y-6">
    <div class="space-y-8">
        <livewire:forms.input
            wire:model="name"
            label="Name"
            trigger="name"
            type="text"
            placeholder="e.g. syafwan" />
        <livewire:forms.textarea
            wire:model="desc"
            label="Description"
            trigger="desc"
            placeholder="e.g. berikan aku hujatan" />
    </div>
    <button type="submit" class="transition-all duration-300 ease-in-out min-w-56 inline-flex justify-center gap-2 items-center bg-gradient-to-br from-blue-600 to-indigo-500 text-white font-extrabold px-6 py-3 rounded-lg shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/60 hover:opacity-80">
        <span wire:loading.remove>Get your message</span>
        <i wire:loading.remove class="icon-[stash--paperplane-solid] w-6 h-6 text-white"></i>
        <i wire:loading class="icon-[line-md--loading-twotone-loop] w-6 h-6 text-white"></i>
    </button>
</form>
