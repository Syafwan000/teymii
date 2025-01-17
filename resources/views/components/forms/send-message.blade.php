<form wire:submit="send" class="max-w-md mx-auto space-y-4">
    <livewire:components.inputs.textarea
        wire:model="message"
        label="Your message"
        trigger="message"
        :error="$errors->has('message') ? $errors->first('message') : null"
        placeholder="e.g. aku ngepens nich"
        maxlength="255" />
    <button type="submit" class="transition-all duration-300 ease-in-out min-w-52 inline-flex justify-center gap-2 items-center bg-gradient-to-br from-blue-600 to-indigo-500 text-white font-extrabold px-6 py-3 rounded-lg shadow-lg shadow-indigo-500/30 hover:shadow-indigo-500/60 hover:opacity-80">
        <span wire:loading.remove>Send message</span>
        <i wire:loading.remove class="icon-[ion--enter] w-6 h-6 text-white"></i>
        <i wire:loading class="icon-[line-md--loading-twotone-loop] w-6 h-6 text-white"></i>
    </button>
</form>
