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
                    <span
                        class="{{ $listing->schedule === 'Full time'
                            ? 'bg-green-500'
                            : ($listing->schedule === 'Part time'
                                ? 'bg-blue-500'
                                : ($listing->schedule === 'Contract'
                                    ? 'bg-purple-500'
                                    : ($listing->schedule === 'Internship'
                                        ? 'bg-amber-500'
                                        : 'bg-blue-100'))) }} px-3 py-1 text-sm text-white font-semibold rounded-full cursor-pointer">
                        {{ $listing->schedule }}
                    </span>
                    <span class="font-medium text-lg text-gray-900">Ksh {{ $listing->salary }}</span>
                </div>

                <div class="flex justify-center mt-5 text-xl font-semibold tracking-wide">
                    {{ $listing->title }}
                </div>

                <div class="flex items-center justify-center space-x-2 text-blue-500 mt-1">
                    <i class="fa-regular fa-building text-3xl"></i>
                    <div class="flex flex-col">
                        <span class="text-sm">{{ $listing->company }}</span>
                        <span class="text-gray-400 text-xs">
                            {{ \Carbon\Carbon::parse($listing->created_at)->format('M d, Y') }}
                        </span>
                    </div>
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
                    <p class="line-clamp-3 text-gray-700 text-sm">{{ $listing->description }}</p>
                </div>

                <div class="flex justify-center mt-4">
                    <a href="/{{ $listing->id }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-sm transition duration-300 ease-in-out">
                        View Job
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
