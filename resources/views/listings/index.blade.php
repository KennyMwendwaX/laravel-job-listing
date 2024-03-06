<x-layout>
    @if (count($listings) == 0)
        <p>No listings found</p>
    @endif

    <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-6 md:space-y-0">
        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
    </div>
</x-layout>
