@props(
    [
        'url' => '/',
        'icon' => null,
        'bgClass' => 'bg-yellow-500',
        'hoverClass' => 'hover:bg-yellow-600',
        'textClass' => 'text-black'
    ]
)

<a href="{{ $url }}" class="block px-4 py-2 {{ $bgClass }} {{ $hoverClass }} {{ $textClass }}">
    <i class="fa fa-edit"></i> Create Job
</a>