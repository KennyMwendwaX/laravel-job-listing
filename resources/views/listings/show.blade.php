<x-layout>
    @if ($listing == null)
        <p>No listing found</p>
    @else
        <h1>{{ $listing['title'] }}</h1>
        <span>{{ $listing['tags'] }}</span>
        <span>{{ $listing['duration'] }}</span>
        <span>{{ $listing['status'] }}</span>
        <p>{{ $listing['description'] }}</p>
    @endif
</x-layout>
