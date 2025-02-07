<x-layout>
    <x-page-heading>
        @if (request()->is('search'))
            Results for "{{ request('q') }}"
        @elseif (request()->is('tags/*'))
            Showing results for tag "{{ last(request()->segments()) }}"
        @endif
    </x-page-heading>

    <div class="space-y-6">
        @if ($jobs->count())
            @foreach ($jobs as $job)
                <x-job-card-wide :job="$job" />
            @endforeach
        @else
            <p class="text-gray-500 text-center">No results found.</p>
        @endif
    </div>
</x-layout>
