<nav x-cloak x-data="{ menu: false }" class="flex justify-between items-center px-6 py-4">
    {{-- Logo Nav --}}
    <div class="flex gap-3 cursor-default">
        <img class="w-12" src="{{ asset('assets/images/logo.svg') }}" alt="TeyMii" draggable="false">
        <div class="flex flex-col text-slate-700">
            <p class="text-xl font-extrabold">TeyMii</p>
            <p class="text-sm">Create your own secret</p>
        </div>
    </div>
    {{-- End Logo Nav --}}
    {{-- Button Menu --}}
    <button @click="menu = !menu" id="btn-menu" class="relative flex justify-center items-center z-10 before:absolute before:-inset-1 before:transition-all before:duration-200 before:ease-in-out before:aspect-square before:w-8 before:flex before:justify-center before:items-center before:rounded-full before:scale-0 before:hover:bg-gray-200 before:hover:scale-100">
        <span id="icon-menu" :class="menu ? 'icon-[fluent--dismiss-24-filled]' : 'icon-[fluent--grid-24-filled]'" class="w-6 h-6 text-slate-700"></span>
    </button>
    {{-- End Button Menu --}}
    {{-- Nav Menu --}}
    <div class="absolute inset-0 transition-all duration-500 ease-in-out w-full h-full backdrop-blur-xl bg-blue-100/30" :class="menu ? 'opacity-100 visible' : 'opacity-0 invisible'">
        <div class="min-h-full flex flex-col justify-between px-6 pt-20 pb-6">
            <div class="w-full aspect-video bg-gray-200 rounded-2xl p-6 shadow-lg">
                Bjir Ngab
            </div>
            <div class="grid grid-cols-12 gap-5 min-h-40">
                <div class="col-span-7 bg-gradient-to-br from-blue-600 to-indigo-500 rounded-2xl p-6 shadow-lg shadow-indigo-500/60">
                    <p class="font-extrabold text-3xl text-white">Create your own secret!</p>
                </div>
                <div class="grid grid-cols-2 col-span-5 gap-5 rounded-2xl">
                    <button class="group col-span-2 flex justify-center items-center bg-gray-200 rounded-2xl border border-gray-300 shadow-lg hover:border-indigo-500/30 hover:shadow-indigo-500/30">
                        <span class="icon-[fluent--weather-moon-24-filled] w-8 h-8 bg-gradient-to-br from-slate-700 to-slate-500 group-hover:from-blue-600 group-hover:to-indigo-500"></span>
                    </button>
                    <a href="https://www.linkedin.com/in/muhammad-syafwan-ardiansyah" target="_blank" class="relative group flex justify-center items-center bg-gray-200 rounded-2xl border border-gray-300 shadow-lg overflow-hidden hover:border-indigo-500 hover:shadow-indigo-500/30">
                        <span class="absolute -top-full -right-full bg-indigo-500 w-8 h-8 flex justify-start items-end rounded-full group-hover:transition-all group-hover:duration-300 group-hover:ease-in-out group-hover:-top-3 group-hover:-right-3">
                            <i class="icon-[fluent--arrow-up-right-24-filled] w-4 h-4 text-gray-200"></i>
                        </span>
                        <span class="icon-[mdi--linkedin] w-8 h-8 bg-gradient-to-br from-slate-700 to-slate-500 group-hover:from-blue-600 group-hover:to-indigo-500"></span>
                    </a>
                    <a href="https://github.com/Syafwan000/teymii" target="_blank" class="relative group flex justify-center items-center bg-gray-200 rounded-2xl border border-gray-300 shadow-lg overflow-hidden hover:border-indigo-500 hover:shadow-indigo-500/30">
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
