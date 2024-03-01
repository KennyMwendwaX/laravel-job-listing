<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>JobHub</title>
</head>

<body>
    <nav class="bg-white border-b border-gray-200 px-4 py-[6px] fixed left-0 right-0 top-0 z-50">
        <div class="flex flex-wrap items-center justify-between mx-auto py-[6px]">
            <div class="flex items-center space-x-8">
                <div class="space-x-3 items-center">
                    <a href="/" class="flex items-center gap-2 font-semibold">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap">
                            JobHub
                        </span>
                    </a>
                </div>
            </div>

            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:border-2 focus:border-blue-500 outline-none"
                    placeholder="Search...">
            </div>

            <div class="flex md:order-2 items-center space-x-3">
                {{-- User circle --}}
                <div>
                    <button
                        cclass="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5">
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

    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0"
        aria-label="Sidenav" id="drawer-navigation">
        <div class="overflow-y-auto py-5 px-3 h-full">
            <ul class="space-y-2">
                <li>
                    <a href="/dashboard"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <RxDashboard class="w-5 h-5 text-white0 transition duration-75 group-hover:text-gray-900" />
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/projects"
                        class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <LuProjector class="w-5 h-5 text-white0 transition duration-75 group-hover:text-gray-900" />
                        <span class="ml-3">Projects</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="p-4 md:ml-64 h-auto pt-20">
        @yield('content')
    </main>
</body>

</html>
