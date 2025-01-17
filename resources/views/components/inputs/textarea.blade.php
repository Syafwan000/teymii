<div x-data="{ focus: false }" class="relative text-left text-slate-700 space-y-0.5">
    <div class="space-y-2">
        <textarea wire:model="value" @focusin="focus = true" @focusout="focus = false" id="{{ $trigger }}" placeholder="{{ $placeholder }}" maxlength="{{ $maxlength }}" class="transition-all duration-300 ease-in-out w-full h-28 border border-gray-200 rounded-lg px-3.5 pt-4 pb-5 outline-none focus:border-blue-500 focus:ring focus:ring-blue-500/30"></textarea>
        <label for="{{ $trigger }}" :class="focus ? 'bg-blue-600 text-white' : 'bg-gray-200'" class="absolute transition-all duration-300 font-semibold text-xs rounded-md px-3 py-px left-3 -top-4 z-10">{{ $label }}</label>
        <span x-text="{{ $maxlength }} - $wire.value.length" class="absolute -top-1 right-2 text-xs font-semibold cursor-default text-blue-500"></span>
    </div>
    <p class="text-left text-sm text-rose-600 pl-1">{{ $error }}</p>
</div>
