<x-layout>
    @if ($listing == null)
        <p>No listing found</p>
    @else
        <h1>{{ $listing['title'] }}</h1>
        <span>{{ $listing['tags'] }}</span>
        <span>{{ $listing['duration'] }}</span>
        <span>{{ $listing['status'] }}</span>
        <p>{!! Illuminate\Support\Str::markdown($listing->description) !!}</p>
    @endif
</x-layout>
