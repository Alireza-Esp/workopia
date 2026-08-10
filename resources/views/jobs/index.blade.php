<x-layout>
    <h1>Aavailable Jobs</h1>
    <ul>
        @forelse ($jobs as $job)
            <li><a href="{{ url("/jobs/$job->id") }}">{{ $job->title }}</a> - {{ $job->description }}</li>
        @empty
            <li>No Jobs Available</li>
        @endforelse
    </ul>
</x-layout>