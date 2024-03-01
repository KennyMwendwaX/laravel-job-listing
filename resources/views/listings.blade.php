@extends('layout')

@section('content')
    <h1>{{ $heading }}</h1>
    @if (count($listings) == 0)
        <p>No listings found</p>
    @endif

    <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-6 md:space-y-0">
        @foreach ($listings as $listing)
            <div class="p-3 rounded-lg border text-card-foreground shadow-sm">
                <h2 class="text-lg font-bold tracking-tight text-gray-900">
                    <a href="/{{ $listing['id'] }}">
                        {{ $listing->title }}
                    </a>
                </h2>
                <div class="flex">
                    <span
                        class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-full">{{ $listing->schedule }}</span>
                    <span
                        class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded-full">{{ $listing->status }}</span>
                </div>
                <div class="flex">

                </div>
                <p class="font-extralight text-gray-600">{{ $listing->description }}</p>
            </div>
            {{-- <div>
                <h3>
                    <a href="/{{ $listing['id'] }}">
                        {{ $listing['title'] }}
                    </a>
                </h3>
                <p>{{ $listing->description }}</p>
            </div> --}}
        @endforeach
    </div>
@endsection
