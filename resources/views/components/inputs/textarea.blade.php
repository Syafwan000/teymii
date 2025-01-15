<div x-data="{ focus: false }" class="relative text-left text-slate-700 space-y-2">
    <textarea wire:model="value" @focusin="focus = true" @focusout="focus = false" id="{{ $trigger }}" class="transition-all duration-300 ease-in-out w-full border border-gray-200 rounded-lg px-3.5 pt-4 pb-5 outline-none focus:border-blue-500 focus:ring focus:ring-blue-500/30" placeholder="{{ $placeholder }}"></textarea>
    <label for="{{ $trigger }}" :class="focus ? 'bg-blue-600 text-white' : 'bg-gray-200'" class="absolute transition-all duration-300 font-semibold text-xs rounded-md px-3 py-px left-3 -top-4 z-10">{{ $label }}</label>
</div>
