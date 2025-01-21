<nav x-cloak x-data="{ menu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset < 10) ? false : true" class="sticky top-0 px-8 pt-6 pb-4 z-50">
    <div :class="scrolled && 'bg-gray-400/30 backdrop-blur-lg rounded-2xl p-3'" class="transition-all duration-300 ease-in-out flex justify-between items-center z-[100]">
        {{-- Logo Nav --}}
        <a wire:navigate href="{{ route('home') }}" class="flex gap-3">
            <img class="w-12" src="{{ asset('assets/images/logo.svg') }}" alt="TeyMii" draggable="false">
            <div class="flex flex-col text-slate-700">
                <p class="text-xl font-extrabold">TeyMii</p>
                <p class="text-sm">Create your own secret</p>
            </div>
        </a>
        {{-- End Logo Nav --}}
        {{-- Button Menu --}}
        <button @click="menu = !menu" class="relative flex justify-center items-center rounded-full z-[100] before:absolute before:-inset-1 before:transition-all before:duration-200 before:ease-in-out before:aspect-square before:w-8 before:flex before:justify-center before:items-center before:rounded-full before:scale-0 before:hover:bg-gray-200 before:hover:scale-100">
            <span :class="menu ? 'icon-[fluent--dismiss-24-filled] motion-rotate-in-[180deg]' : 'icon-[fluent--grid-24-filled] motion-rotate-out-[180deg]'" class="w-6 h-6 text-slate-700"></span>
        </button>
        {{-- End Button Menu --}}
    </div>
    {{-- Nav Menu --}}
    <div class="fixed inset-0 left-1/2 -translate-x-1/2 transition-all duration-500 ease-in-out max-w-screen-sm w-full max-h-screen h-full backdrop-blur-xl bg-blue-100/30 z-20" :class="menu ? 'opacity-100 visible' : 'opacity-0 invisible'">
        <div class="min-h-full flex flex-col justify-between px-8 pt-20 pb-6">
            <div :class="menu && 'motion-preset-blur-up-lg motion-preset-fade'" class="w-full aspect-video bg-gradient-to-br from-blue-600 via-indigo-500 to-purple-500 rounded-2xl p-6 shadow-lg">
                {{-- Gatau mau diisi apa --}}
            </div>
            <div class="grid grid-cols-12 gap-5 min-h-40">
                <div :class="menu && 'motion-preset-blur-right-lg motion-preset-fade'" class="col-span-8 bg-gradient-to-br from-blue-600 to-indigo-500 rounded-2xl p-6 shadow-lg shadow-indigo-500/60">
                    <p class="font-extrabold text-3xl text-white leading-relaxed">#SayTheUnsayable</p>
                </div>
                <div class="grid grid-cols-2 col-span-4 gap-5 rounded-2xl">
                    <button :class="menu && 'motion-preset-blur-down-lg motion-preset-fade'" class="group col-span-2 flex justify-center items-center bg-gray-200 rounded-2xl border border-gray-300 shadow-lg hover:border-indigo-500/30 hover:shadow-indigo-500/30">
                        <span class="icon-[fluent--weather-moon-24-filled] w-8 h-8 bg-gradient-to-br from-slate-700 to-slate-500 group-hover:from-blue-600 group-hover:to-indigo-500"></span>
                    </button>
                    <a href="https://www.linkedin.com/in/muhammad-syafwan-ardiansyah" target="_blank" :class="menu && 'motion-preset-blur-up-lg motion-preset-fade'" class="relative group flex justify-center items-center bg-gray-200 rounded-2xl border border-gray-300 shadow-lg overflow-hidden hover:border-indigo-500 hover:shadow-indigo-500/30">
                        <span class="absolute -top-full -right-full bg-indigo-500 w-8 h-8 flex justify-start items-end rounded-full group-hover:transition-all group-hover:duration-300 group-hover:ease-in-out group-hover:-top-3 group-hover:-right-3">
                            <i class="icon-[fluent--arrow-up-right-24-filled] w-4 h-4 text-gray-200"></i>
                        </span>
                        <span class="icon-[mdi--linkedin] w-8 h-8 bg-gradient-to-br from-slate-700 to-slate-500 group-hover:from-blue-600 group-hover:to-indigo-500"></span>
                    </a>
                    <a href="https://github.com/Syafwan000/teymii" target="_blank" :class="menu && 'motion-preset-blur-up-lg motion-preset-fade'" class="relative group flex justify-center items-center bg-gray-200 rounded-2xl border border-gray-300 shadow-lg overflow-hidden hover:border-indigo-500 hover:shadow-indigo-500/30">
                        <span class="absolute -top-full -right-full bg-indigo-500 w-8 h-8 flex justify-start items-end rounded-full group-hover:transition-all group-hover:duration-300 group-hover:ease-in-out group-hover:-top-3 group-hover:-right-3">
                            <i class="icon-[fluent--arrow-up-right-24-filled] w-4 h-4 text-gray-200"></i>
                        </span>
                        <span class="icon-[mdi--github] w-8 h-8 bg-gradient-to-br from-slate-700 to-slate-500 group-hover:from-blue-600 group-hover:to-indigo-500"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- End Nav Menu --}}
</nav>
