@props(['listing'])

@php
    $created_at = \Carbon\Carbon::parse($listing->created_at)->format('M d, Y');
    $tags = explode(',', $listing->tags);
@endphp

<div class="p-5 bg-white border rounded-lg shadow-sm overflow-hidden">
    <div class="flex items-center justify-between">
        <a href="/?schedule={{ $listing->schedule }}"
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
        </a>
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
                {{ $created_at }}
            </span>
        </div>
    </div>

    <div class="flex justify-center mt-3 space-x-2">
        @foreach ($tags as $tag)
            <a href="/?tag={{ $tag }}"
                class="text-gray-900 bg-white border border-gray-300 px-2 py-1 rounded-full text-xs font-medium cursor-pointer">
                {{ $tag }}
            </a>
        @endforeach
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
