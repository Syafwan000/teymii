<div x-data="{ focus: false }" class="relative text-left text-slate-700 space-y-1.5">
    <div class="space-y-2">
        <input wire:model="value" @focusin="focus = true" @focusout="focus = false" type="{{ $type }}" id="{{ $trigger }}" placeholder="{{ $placeholder }}" class="transition-all duration-300 ease-in-out w-full h-8 border border-gray-200 rounded-lg px-3.5 pt-6 pb-5 outline-none focus:border-blue-500 focus:ring focus:ring-blue-500/30">
        <label for="{{ $trigger }}" :class="focus ? 'bg-blue-600 text-white' : 'bg-gray-200'" class="absolute transition-all duration-300 font-semibold text-xs rounded-md px-3 py-px left-3 -top-4 z-10">{{ $label }}</label>
    </div>
    <p class="text-left text-sm text-rose-600 pl-1">{{ $error }}</p>
</div>
