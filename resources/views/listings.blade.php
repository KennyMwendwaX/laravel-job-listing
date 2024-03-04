@extends('layout')

@section('content')
    <h1>{{ $heading }}</h1>
    @if (count($listings) == 0)
        <p>No listings found</p>
    @endif

    <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-6 md:space-y-0">
        @foreach ($listings as $listing)
            <div class="p-5 bg-white border rounded-lg shadow-sm overflow-hidden">
                <div class="flex items-center justify-between">
                    <span class="px-3 py-1 bg-green-500 text-sm font-semibold text-white rounded-full cursor-pointer">Full
                        time</span>
                    <span class="font-medium text-lg text-gray-900">Ksh 80,000</span>
                </div>

                <div class="flex justify-center mt-5 text-xl font-semibold tracking-wide">
                    Software developer
                </div>
                <div class="flex items-center justify-center space-x-2 text-blue-500 mt-1">
                    <i class="fa-regular fa-building text-xl"></i>
                    <span>Apple Inc</span>
                </div>

                <div class="flex justify-center mt-2 space-x-2">
                    <span
                        class="text-gray-900 bg-white border border-gray-300 px-2 py-1 rounded-full text-xs font-medium cursor-pointer">
                        Backend</span>
                    <span
                        class="text-gray-900 bg-white border border-gray-300 px-2 py-1 rounded-full text-xs font-medium cursor-pointer">
                        Next.js
                    </span>
                    <span
                        class="text-gray-900 bg-white border border-gray-300 px-2 py-1 rounded-full text-xs font-medium cursor-pointer">
                        JavaScript
                    </span>
                </div>

                <div class="justify-center mt-3">
                    <p class="line-clamp-3 text-gray-700 text-base">{{ $listing->description }}</p>
                </div>

                <!-- Stylish "View Job" button -->
                <div class="flex justify-center mt-4">
                    <a href="#"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-sm transition duration-300 ease-in-out">
                        View Job
                    </a>
                </div>
            </div>

            {{-- <div class="bg-white rounded-lg border shadow-sm overflow-hidden">
                <div class="p-3">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-medium text-gray-800 hover:text-gray-600">
                            {{ $listing->title }}
                        </h3>
                        <span
                            class="{{ $listing->schedule === 'Full time'
                                ? 'bg-green-100 text-green-800'
                                : ($listing->schedule === 'Part time'
                                    ? 'bg-purple-100 text-purple-800'
                                    : ($listing->schedule === 'Contract'
                                        ? 'bg-blue-100 text-blue-800'
                                        : ($listing->schedule === 'Internship'
                                            ? 'bg-amber-100 text-amber-800'
                                            : 'bg-yellow-100 text-yellow-800'))) }} text-xs font-medium px-2.5 py-0.5 rounded-full cursor-pointer">
                            {{ $listing->schedule }}</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="text-base text-blue-600">
                            {{ $listing->company }}
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded">
                            {{ $listing->status }}
                        </span>
                    </div>
                    <span class="text-gray-400 text-sm mt-1">
                        {{ \Carbon\Carbon::parse($listing->created_at)->format('M d, Y') }}
                    </span>

                    <div class="flex mt-2 space-x-2">
                        <span class="inline-block bg-gray-200 text-gray-600 px-2 py-1 rounded-full text-xs font-medium">
                            Backend</span>
                        <span class="inline-block bg-gray-200 text-gray-600 px-2 py-1 rounded-full text-xs font-medium">
                            Next.js
                        </span>
                        <span class="inline-block bg-gray-200 text-gray-600 px-2 py-1 rounded-full text-xs font-medium">
                            JavaScript
                        </span>
                    </div>
                    <span class="text-gray-400 text-sm mt-1">
                        Salary: Ksh 40,000
                    </span>
                    <div>{{ $listing->description }}</div>
                </div>
                <div class="px-4 py-2 border-t border-gray-200 flex justify-end">
                    <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">
                        Apply Now
                    </a>
                </div>
            </div> --}}
        @endforeach
    </div>
@endsection
