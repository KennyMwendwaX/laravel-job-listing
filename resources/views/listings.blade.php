@extends('layout')

@section('content')
    <h1>{{ $heading }}</h1>
    @if (count($listings) == 0)
        <p>No listings found</p>
    @endif

    <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-6 md:space-y-0">
        @foreach ($listings as $listing)
            <div class="bg-white rounded-lg border shadow-sm overflow-hidden">
                <div class="p-3">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-medium text-gray-800 hover:text-gray-600">
                            {{ $listing->title }}
                        </h3>
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full cursor-pointer">{{ $listing->schedule }}</span>
                    </div>
                    <div class="text-base text-blue-600 mt-1">
                        {{ $listing->company }}
                    </div>
                    <span class="text-gray-400 text-sm mt-1">
                        {{ \Carbon\Carbon::parse($listing->created_at)->format('M d, Y') }}
                    </span>
                    <div class="flex mt-2 space-x-2">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded">
                            {{ $listing->status }}
                        </span>
                        <span class="inline-block bg-gray-200 text-gray-600 px-2 py-1 rounded-full text-xs font-medium">
                            Backend</span>
                        <span class="inline-block bg-gray-200 text-gray-600 px-2 py-1 rounded-full text-xs font-medium">
                            Next.js
                        </span>
                        <span class="inline-block bg-gray-200 text-gray-600 px-2 py-1 rounded-full text-xs font-medium">
                            JavaScript
                        </span>
                    </div>
                </div>
                <div class="px-4 py-2 border-t border-gray-200 flex justify-end">
                    <a href="#" class="text-indigo-600 hover:text-indigo-500 text-sm font-medium">
                        Apply Now
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
