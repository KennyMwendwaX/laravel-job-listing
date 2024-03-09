<x-layout>
    @if ($listing == null)
        <p>No listing found</p>
    @else
        <div class="px-4 mx-auto max-w-screen-md">
            <h1 class="text-3xl font-bold text-gray-800">{{ $listing->title }}</h1>

            <div class="flex items-center mt-2">
                <div class="flex items-center mr-4 space-x-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4a3 3 0 1 1-3 3 3 3 0 0 1 3-3zM12 14s-8 1.5-8 5v3h16v-3c0-3.5-8-5-8-5z"></path>
                    </svg>
                    <span class="text-gray-600">{{ $listing->company }}</span>
                </div>
                <div class="flex items-center mr-4 space-x-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 13c0 4.418-7.163 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9V5m0 4v10m-4-8h8">
                        </path>
                    </svg>
                    <span class="text-gray-600">{{ $listing->location }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 4v16m2-16v4m2-4v8m2-8v12m2-12v4m2-4v8m2-8v4m2-4v8m2-8v12m2-12v4m2-4v16M4 9h16m-16-2h16M4 5h16m-16 2h16">
                        </path>
                    </svg>
                    <span class="text-gray-600">{{ $listing->schedule }}</span>
                </div>
            </div>
            <div class="flex items-center mt-4 space-x-4">
                <div class="bg-gray-200 text-gray-600 px-4 py-1 rounded-lg">{{ $listing->status }}</div>
                <div class="bg-gray-200 text-gray-600 px-4 py-1 rounded-lg">{{ $listing->duration }}</div>
                <div class="bg-gray-200 text-gray-600 px-4 py-1 rounded-lg">{{ $listing->salary }}</div>
            </div>
            <p class="mt-8 text-gray-800">{{ $listing->description }}</p>
        </div>
    @endif
</x-layout>
