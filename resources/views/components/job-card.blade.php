@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class="flex justify-between">
        <div class="self-start text-sm">{{ $job->employer->name }}</div>
        <x-employer-logo :employer="$job->employer" :width="42" :height="42" />
    </div>

    <div class="py-8">
        <h3 class=" text-xl font-bold transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="text-sm mt-4">{{ $job->schedule }} - {{ $job->salary }} per year</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
    </div>
</x-panel>
