@php
    $created_at = \Carbon\Carbon::parse($listing->created_at)->format('M d, Y');
@endphp

<x-layout>
    @if ($listing == null)
        <p>No listing found</p>
    @else
        <div class="flex flex-wrap">
            <div class="w-full md:w-2/3 pr-6">
                <!-- Content for the first column -->
                <h1 class="text-3xl font-bold text-gray-800">{{ $listing->title }}</h1>
                <div class="flex items-center space-x-2 text-sm">
                    <div class="flex items-center space-x-1 text-blue-500">
                        <i class="fa-regular fa-building text-3xl"></i>
                        <span class="font-medium text-lg">Acme, Inc</span>
                    </div>
                    <span class="text-gray-500">•</span>
                    <span class="text-gray-400 text-sm">{{ $created_at }}</span>
                </div>
                <p class="mt-8 text-gray-800">{{ $listing->description }}</p>
            </div>
            <div class="w-full md:w-1/3 mt-6 md:mt-0">
                <div class="p-4 rounded-lg border text-card-foreground shadow-sm">
                    <h3 class="font-semibold whitespace-nowrap tracking-tight text-xl tracking-wide">Details</h3>
                    <div class="grid gap-2 mt-3">
                        <div class="flex items-center gap-2">
                            <i class="fa-regular fa-calendar"></i>
                            <div class="text-sm">Posted: 2 days ago</div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-regular fa-clock"></i>
                            <div class="text-sm">Schedule: Full-time</div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot"></i>
                            <div class="text-sm">Location: Nairobi, Kenya</div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-regular fa-envelope"></i>
                            <div class="text-sm">Email: info.acme@gmail.com</div>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-link"></i>
                            <div class="text-sm">Website: acme.com</div>
                        </div>
                    </div>
                </div>
                <div class="p-4 rounded-lg border bg-card text-card-foreground shadow-sm mt-4">
                    <h3 class="font-semibold whitespace-nowrap tracking-tight text-xl tracking-wide">Salary</h3>
                    <p class="text-xl font-medium mt-3">Ksh 120,000</p>
                </div>

                <a href="/{{ $listing->id }}/apply"
                    class="mt-4 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 block text-center">
                    Apply
                </a>

            </div>
        </div>
    @endif
</x-layout>
