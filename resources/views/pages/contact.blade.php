<section class="space-y-8 px-4 overflow-hidden sm:px-8">
    <livewire:components.inputs.back />
    <div class="text-slate-700 space-y-4 sm:space-y-8 dark:text-slate-200">
        <div class="space-y-3">
            <h1 class="text-title">Contact</h1>
            <p class="text-paragraph">Feel free to reach out to us with any questions, feedback, or concerns. We are always happy to hear from you and will do our best to respond promptly.</p>
        </div>
        <div class="flex flex-col gap-2">
            {{-- LinkedIn --}}
            <a href="https://www.linkedin.com/in/muhammad-syafwan-ardiansyah" target="_blank" class="motion-preset-rebound-right motion-duration-1000 group transition-all duration-300 ease-in-out flex justify-between items-center rounded-3xl py-3 hover:bg-gray-200 hover:px-4 sm:hover:px-6">
                <div class="flex gap-2 sm:items-center dark:group-hover:text-slate-700">
                    <span class="icon-[mdi--linkedin] w-10 h-10 shrink-0"></span>
                    <div class="flex flex-col">
                        <span class="font-bold text-xl sm:text-2xl">Muhammad Syafwan Ardiansyah</span>
                        <span class="font-medium">LinkedIn</span>
                    </div>
                </div>
                <div class="transition-all duration-300 flex justify-center items-center ease-in-out w-12 h-12 rounded-full shrink-0 group-hover:bg-blue-600 group-hover:text-white">
                    <span class="transition-all duration-75 ease-in-out icon-[si--arrow-right-fill] w-8 h-8 group-hover:-rotate-45 sm:w-12 sm:h-12"></span>
                </div>
            </a>
            {{-- End LinkedIn --}}
            {{-- GitHub --}}
            <a href="https://github.com/Syafwan000/teymii" target="_blank" class="motion-preset-rebound-right motion-duration-1000 motion-delay-500 group transition-all duration-300 ease-in-out flex justify-between items-center rounded-3xl py-3 hover:bg-gray-200 hover:px-4 sm:hover:px-6">
                <div class="flex gap-2 sm:items-center dark:group-hover:text-slate-700">
                    <span class="icon-[mdi--github] w-10 h-10 shrink-0"></span>
                    <div class="flex flex-col">
                        <span class="font-bold text-xl sm:text-2xl">Syafwan000</span>
                        <span class="font-medium">GitHub</span>
                    </div>
                </div>
                <div class="transition-all duration-300 flex justify-center items-center ease-in-out w-12 h-12 rounded-full shrink-0 group-hover:bg-blue-600 group-hover:text-white">
                    <span class="transition-all duration-75 ease-in-out icon-[si--arrow-right-fill] w-8 h-8 group-hover:-rotate-45 sm:w-12 sm:h-12"></span>
                </div>
            </a>
            {{-- End GitHub --}}
        </div>
    </div>
</section>
