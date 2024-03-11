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
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div class="flex flex-col space-y-1.5 p-6 pb-0">
                        <h3 class="font-semibold whitespace-nowrap tracking-tight text-2xl">Details</h3>
                    </div>
                    <div class="p-6 grid gap-2">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4">
                                <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                <line x1="16" x2="16" y1="2" y2="6"></line>
                                <line x1="8" x2="8" y1="2" y2="6"></line>
                                <line x1="3" x2="21" y1="10" y2="10"></line>
                            </svg>
                            <div class="text-sm">Posted: 2 days ago</div>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4">
                                <line x1="2" x2="5" y1="12" y2="12"></line>
                                <line x1="19" x2="22" y1="12" y2="12"></line>
                                <line x1="12" x2="12" y1="2" y2="5"></line>
                                <line x1="12" x2="12" y1="19" y2="22"></line>
                                <circle cx="12" cy="12" r="7"></circle>
                            </svg>
                            <div class="text-sm">Location: Remote</div>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-4 h-4">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <div class="text-sm">Employment Type: Full-time</div>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm mt-6">
                    <div class="flex flex-col space-y-1.5 p-6 pb-0">
                        <h3 class="font-semibold whitespace-nowrap tracking-tight text-2xl">Salary</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-3xl font-bold">$120,000 - $150,000</p>
                    </div>
                </div>
                <div class="rounded-lg border bg-card text-card-foreground shadow-sm mt-6">
                    <div class="flex flex-col space-y-1.5 p-6 pb-0">
                        <h3 class="font-semibold whitespace-nowrap tracking-tight text-2xl">Apply</h3>
                    </div>
                    <div class="p-6">
                        <button
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 w-full">
                            Contact Recruiter
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
</x-layout>
