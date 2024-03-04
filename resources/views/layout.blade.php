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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: Roboto, sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>

    <title>JobHub</title>
</head>

<body>
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
                    class="block w-full py-2 px-12 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:border-2 focus:border-blue-500 outline-none"
                    placeholder="Search...">
            </div>

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

    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-300 md:translate-x-0"
        aria-label="Sidenav" id="drawer-navigation">
        <div class="overflow-y-auto py-5 px-3 h-full">
            <div class="text-xl pb-2 border-b border-gray-300">Filters</div>

            <div class="my-3 border-b border-gray-300">
                <div class="text-gray-600 mb-4">Salary</div>
                <div class="flex items-center mb-3">
                    <input id="full-time" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="full-time" class="ms-2 text-sm font-medium text-gray-900">
                        Over Ksh 100,000</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="part-time" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="part-time" class="ms-2 text-sm font-medium text-gray-900">
                        Ksh 50,000 - Ksh 100,000</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="contract" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="contract" class="ms-2 text-sm font-medium text-gray-900">
                        Ksh 25,000 - Ksh 50,000</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="internship" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="internship" class="ms-2 text-sm font-medium text-gray-900">
                        Under Ksh 25,000</label>
                </div>
            </div>

            <div class="my-3 border-b border-gray-300">
                <div class="text-gray-600 mb-4">Schedule</div>
                <div class="flex items-center mb-3">
                    <input id="full-time" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="full-time" class="ms-2 text-sm font-medium text-gray-900">
                        Full time</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="part-time" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="part-time" class="ms-2 text-sm font-medium text-gray-900">
                        Part time</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="contract" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="contract" class="ms-2 text-sm font-medium text-gray-900">
                        Contract</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="internship" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="internship" class="ms-2 text-sm font-medium text-gray-900">
                        Internship</label>
                </div>
            </div>

            <div class="my-3">
                <div class="text-gray-600 mb-4">Status</div>
                <div class="flex items-center mb-3">
                    <input id="on-site" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="on-site" class="ms-2 text-sm font-medium text-gray-900">
                        On Site</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="remote" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="remote" class="ms-2 text-sm font-medium text-gray-900">
                        Remote</label>
                </div>
                <div class="flex items-center mb-3">
                    <input id="hybrid" type="checkbox"
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 cursor-pointer">
                    <label for="hybrid" class="ms-2 text-sm font-medium text-gray-900">
                        Hybrid</label>
                </div>
            </div>
        </div>
    </aside>

    <main class="p-4 md:ml-64 h-auto pt-20">
        @yield('content')
    </main>
</body>

</html>
