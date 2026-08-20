<x-layout>
    <div class="bg-blue-900 h-24 px-4 mb-4 flex justify-center items-center rounded-md">
        <x-search></x-search>
    </div>

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
    {{ $jobs->links() }}
    <x-bottom-banner></x-bottom-banner>
</x-layout>