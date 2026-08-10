<x-layout>
    <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">
        All Jobs
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    @forelse ($jobs as $job)
        <x-job-card :job="$job"></x-job-card>
    @empty
        <p>No Jobs Available</p>
    @endforelse
    </div>

    <x-bottom-banner></x-bottom-banner>
</x-layout>