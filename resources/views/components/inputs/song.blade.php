<div x-data="song" class="relative text-left text-slate-700 space-y-1.5">
    <div class="space-y-2">
        <input wire:model.live="value" @focusin="focusIn" @focusout="focusOut" type="{{ $type }}" id="{{ $trigger }}" placeholder="{{ $placeholder }}" class="transition-all duration-300 ease-in-out w-full h-8 border border-gray-200 rounded-lg pl-3.5 pr-10 pt-6 pb-5 outline-none focus:border-blue-500 focus:ring focus:ring-blue-500/30 dark:text-slate-200 dark:bg-gray-600 dark:border-gray-700">
        <label for="{{ $trigger }}" :class="focus ? 'bg-blue-600 text-white' : 'bg-gray-200 dark:bg-gray-300'" class="absolute transition-all duration-300 font-semibold text-xs rounded-md px-3 py-px left-3 -top-4 z-10">{{ $label }}</label>
        @if($value || $selectedSong)
            <button type="button" wire:click="resetSong" class="absolute w-6 h-6 top-1 right-3">
                <span class="icon-[material-symbols--close-rounded] w-6 h-6 transition-all duration-300 ease-in-out text-gray-200 hover:text-gray-400 dark:text-gray-500 dark:hover:text-gray-400"></span>
            </button>
        @endif
    </div>
    @if($selectedSong)
        <div class="relative flex gap-4 w-full bg-gray-200 rounded-lg p-3.5 dark:text-slate-200 dark:bg-gray-600">
            <span class="icon-[mdi--spotify] w-8 h-8 absolute top-1/2 -translate-y-1/2 right-4 text-gray-400"></span>
            <img class="rounded-md w-16 aspect-square" src="{{ $selectedSong['album']['images'][0]['url'] }}" alt="{{ $selectedSong['name'] }}" draggable="false">
            <div class="flex flex-col text-left gap-1 w-full">
                <h4 class="font-bold">{{ $selectedSong['name'] }}</h4>
                <div class="flex gap-1">
                    @foreach($selectedSong['artists'] as $artist)
                        <p class="text-sm">{{ $artist['name'] }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <p class="text-left text-sm text-rose-600 pl-1">{{ $error }}</p>
    @if($value)
        <div x-show="dropdown" class="absolute rounded-xl h-[300px] w-full bg-gray-300 overflow-y-scroll overflow-x-hidden z-10 @if($selectedSong) top-12 @else inset-y-full @endif dark:text-slate-200 dark:bg-gray-700">
            @foreach($songs['tracks']['items'] as $song)
                <button type="button" @click="dropdown = false" wire:click="selectSong('{{ $song['id'] }}')" class="w-full px-3.5 py-2 bg-gradient-to-br hover:from-blue-600 hover:to-indigo-500 hover:text-white">
                    <div class="flex gap-4">
                        @if($song['album']['images'][0]['url'])
                            <img class="rounded-md w-16 aspect-square" src="{{ $song['album']['images'][0]['url'] }}" alt="{{ $song['name'] }}" draggable="false">
                        @else
                            <span class="icon-[mdi--spotify] w-8 h-8 text-gray-400"></span>
                        @endif
                        <div class="flex flex-col text-left gap-1 w-full overflow-x-hidden">
                            <h4 class="font-bold w-max">{{ $song['name'] }}</h4>
                            <div class="flex gap-1 w-max">
                                @foreach($song['artists'] as $key => $artist)
                                    <p class="text-sm">
                                        {{ $artist['name'] }}{{ ($key < (count($song['artists']) - 1)) ? ',' : '' }}
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </button>
            @endforeach
        </div>
    @endif
</div>
