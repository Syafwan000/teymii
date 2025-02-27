<nav x-cloak x-data="{ menu: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset < 10) ? false : true" class="sticky top-0 px-4 pt-4 pb-4 z-50 sm:px-8 sm:pt-6">
    <div :class="scrolled && 'bg-gray-400/60 backdrop-blur-lg rounded-2xl p-3 dark:bg-gray-600/60'" class="transition-all duration-300 ease-in-out flex justify-between items-center z-[100]">
        {{-- Logo Nav --}}
        <a wire:navigate href="{{ route('home') }}" class="flex gap-3">
            <img class="w-12" src="{{ asset('assets/images/logo.svg') }}" alt="TeyMii" draggable="false">
            <div class="flex flex-col text-slate-700 dark:text-slate-200">
                <p class="text-xl font-extrabold">TeyMii</p>
                <p class="text-sm">Create your own secret</p>
            </div>
        </a>
        {{-- End Logo Nav --}}
        {{-- Button Menu --}}
        <button @click="menu = !menu" class="relative flex justify-center items-center rounded-full before:absolute before:-inset-1 before:transition-all before:duration-200 before:ease-in-out before:aspect-square before:w-8 before:flex before:justify-center before:items-center before:rounded-full before:scale-0 before:hover:bg-gray-200 before:hover:scale-100 dark:before:hover:bg-gray-600">
            <span class="icon-[fluent--grid-24-filled] w-6 h-6 text-slate-700 dark:text-slate-200"></span>
        </button>
        {{-- End Button Menu --}}
    </div>
    {{-- Nav Menu --}}
    <div class="fixed inset-0 left-1/2 -translate-x-1/2 transition-all duration-500 ease-in-out max-w-screen-sm w-full max-h-screen h-full backdrop-blur-xl bg-blue-100/60 z-20 dark:bg-gray-700/60" :class="menu ? 'opacity-100 visible' : 'opacity-0 invisible'">
        <button @click="menu = !menu" class="absolute top-7 right-4 flex justify-center items-center rounded-full z-[100] before:absolute before:-inset-1 before:transition-all before:duration-200 before:ease-in-out before:aspect-square before:w-8 before:flex before:justify-center before:items-center before:rounded-full before:scale-0 before:hover:bg-gray-200 before:hover:scale-100 dark:before:hover:bg-gray-600 sm:top-9 sm:right-8">
            <span class="icon-[fluent--dismiss-24-filled] motion-rotate-out-[180deg] w-6 h-6 text-slate-700 dark:text-slate-200"></span>
        </button>
        <div class="min-h-full flex flex-col justify-between px-4 pt-20 pb-6 sm:px-8">
            <div :class="menu && 'motion-preset-blur-up-lg motion-preset-fade'" class="relative w-full aspect-video bg-gradient-to-br from-blue-600 via-indigo-500 to-purple-500 rounded-2xl p-6 shadow-lg overflow-hidden dark:shadow-indigo-500/30">
                <img class="absolute -bottom-1 left-1/2 -translate-x-1/2 hidden min-[500px]:block" src="{{ asset('assets/images/banner.png') }}" alt="Banner">
                <p class="text-white font-semibold text-3xl block leading-relaxed italic min-[500px]:hidden">
                    <span class="font-black not-italic">TeyMii</span> — Create your own secret!
                </p>
            </div>
            <div class="grid grid-cols-12 gap-3 min-h-40 min-[550px]:gap-5">
                <div :class="menu && 'motion-preset-blur-right-lg motion-preset-fade'" class="col-span-12 bg-gradient-to-br from-blue-600 to-indigo-500 rounded-2xl p-6 shadow-lg order-2 min-[550px]:col-span-8 min-[550px]:order-1 dark:shadow-indigo-500/30">
                    <p class="font-extrabold text-2xl text-white leading-relaxed sm:text-3xl">#SayTheUnsayable</p>
                </div>
                <div class="grid grid-cols-12 col-span-12 gap-3 rounded-2xl order-1 min-[550px]:grid-cols-2 min-[550px]:col-span-4 min-[550px]:order-2">
                    <button wire:ignore id="theme-switcher" :class="menu && 'motion-preset-blur-down-lg motion-preset-fade'" class="group col-span-12 flex justify-center items-center transition-all duration-300 ease-in-out bg-gray-200 rounded-2xl border border-gray-300 shadow-lg overflow-hidden hover:border-indigo-500/30 hover:shadow-indigo-500/30 max-[550px]:min-h-14 min-[550px]:gap-5 min-[550px]:col-span-2 dark:bg-gray-600 dark:border-gray-700">
                        <span class="icon-[fluent--weather-moon-24-filled] transition-all duration-300 ease-in-out w-7 h-7 bg-gradient-to-br from-slate-700 to-slate-500 group-hover:from-blue-600 group-hover:to-indigo-500 min-[550px]:w-8 min-[550px]:h-8 dark:hidden dark:from-slate-200 dark:to-slate-300 dark:group-hover:from-blue-200 dark:group-hover:to-indigo-200"></span>
                        <span class="icon-[mingcute--sun-fill] transition-all duration-300 ease-in-out hidden w-7 h-7 bg-gradient-to-br from-slate-700 to-slate-500 group-hover:from-blue-600 group-hover:to-indigo-500 min-[550px]:w-8 min-[550px]:h-8 dark:block dark:from-slate-200 dark:to-slate-300 dark:group-hover:from-blue-200 dark:group-hover:to-indigo-200"></span>
                    </button>
                    <a href="https://www.linkedin.com/in/muhammad-syafwan-ardiansyah" target="_blank" :class="menu && 'motion-preset-blur-up-lg motion-preset-fade'" class="relative group flex justify-center items-center transition-all duration-300 ease-in-out bg-gray-200 rounded-2xl border border-gray-300 shadow-lg overflow-hidden hover:border-indigo-500 hover:shadow-indigo-500/30 max-[550px]:min-h-14 max-[550px]:col-span-6 dark:bg-gray-600 dark:border-gray-700">
                        <span class="absolute -top-full -right-full bg-indigo-500 w-8 h-8 flex justify-start items-end rounded-full group-hover:transition-all group-hover:duration-300 group-hover:ease-in-out group-hover:-top-3 group-hover:-right-3 dark:bg-gradient-to-br dark:from-blue-200 dark:to-indigo-200">
                            <i class="icon-[fluent--arrow-up-right-24-filled] w-4 h-4 text-gray-200 dark:text-gray-600"></i>
                        </span>
                        <span class="icon-[mdi--linkedin] transition-all duration-300 ease-in-out w-7 h-7 bg-gradient-to-br from-slate-700 to-slate-500 group-hover:from-blue-600 group-hover:to-indigo-500 min-[550px]:w-8 min-[550px]:h-8 dark:from-slate-200 dark:to-slate-300 dark:group-hover:from-blue-200 dark:group-hover:to-indigo-200"></span>
                    </a>
                    <a href="https://github.com/Syafwan000/teymii" target="_blank" :class="menu && 'motion-preset-blur-up-lg motion-preset-fade'" class="relative group flex justify-center items-center transition-all duration-300 ease-in-out bg-gray-200 rounded-2xl border border-gray-300 shadow-lg overflow-hidden hover:border-indigo-500 hover:shadow-indigo-500/30 max-[550px]:min-h-14 max-[550px]:col-span-6 dark:bg-gray-600 dark:border-gray-700">
                        <span class="absolute -top-full -right-full bg-indigo-500 w-8 h-8 flex justify-start items-end rounded-full group-hover:transition-all group-hover:duration-300 group-hover:ease-in-out group-hover:-top-3 group-hover:-right-3 dark:bg-gradient-to-br dark:from-blue-200 dark:to-indigo-200">
                            <i class="icon-[fluent--arrow-up-right-24-filled] w-4 h-4 text-gray-200 dark:text-gray-600"></i>
                        </span>
                        <span class="icon-[mdi--github] transition-all duration-300 ease-in-out w-7 h-7 bg-gradient-to-br from-slate-700 to-slate-500 group-hover:from-blue-600 group-hover:to-indigo-500 min-[550px]:w-8 min-[550px]:h-8 dark:from-slate-200 dark:to-slate-300 dark:group-hover:from-blue-200 dark:group-hover:to-indigo-200"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- End Nav Menu --}}
</nav>
