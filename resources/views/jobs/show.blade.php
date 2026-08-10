<x-layout>
    <h1 class="text-2xl"><a href="{{ route('jobs.show', $job->id) }}">{{ $job->title }}</a></h1>
    <p>{{ $job->description }}</p>
</x-layout>