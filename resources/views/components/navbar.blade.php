<nav class="bg-white border-b border-gray-300 px-4 py-[3px] fixed left-0 right-0 top-0 z-50">
    <div class="flex flex-wrap items-center justify-between mx-auto py-[6px]">
        <div class="flex items-center space-x-8">
            <div class="space-x-3 items-center">
                <a href="/" class="flex items-center gap-2 font-semibold">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-800">
                        JobHub
                    </span>
                </a>
            </div>
        </div>

        @include('partials._search')

        <div class="flex md:order-2 items-center space-x-3">
            {{-- User circle --}}
            <div>
                <button
                    class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5">
                    <span>Sign in</span>
                </button>
            </div>
            <div>
                <button
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">
                    <span>Sign up</span>
                    {{-- <IoIosArrowRoundForward className="ml-1 w-5 h-5" /> --}}
                </button>
            </div>
            <div className="flex justify-end flex-wrap items-center space-x-2">
            </div>
        </div>
    </div>
</nav>
