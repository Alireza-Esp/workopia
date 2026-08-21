<x-layout>
    <div class="bg-blue-900 h-24 px-4 mb-4 flex justify-center items-center rounded-md">
        <x-search></x-search>
        @if (request()->has('keywords') || request()->has('location'))
            <a href="{{ route('jobs.index') }}" class="bg-gray-100 hover:bg-gray-300 text-black px-4 py-2 rounded mb-4 inline-block">
                <i class="fa fa-info-arrow-left mr-1"></i>Back
            </a>
        @endif
    </div>

    <h2 class="text-center text-3xl mb-4 font-bold border border-gray-300 p-3">
        @if (request()->has('keywords') || request()->has('location'))
            Search Results
        @else
            All Jobs
        @endif
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