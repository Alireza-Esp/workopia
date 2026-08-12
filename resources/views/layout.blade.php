<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>{{$title ?? 'Workopia | Find and list jobs'}}</title>
</head>

<body class="bg-gray-100">
    <x-header />
    @if(request()->is('/'))
    <x-hero></x-hero>
    <x-top-banner></x-top-banner>
    @endif
    <main class="container mx-auto p-4 mt-4">
        @if (session('success'))
            <x-alert type="success" message="{{ session('success') }}"></x-alert>
        @endif
        @if (session('error'))
            <x-alert type="error" message="{{ session('error') }}"></x-alert>
        @endif
        {{ $slot }}
    </main>
    <script src="{{ asset("/js/script.js") }}"></script>
</body>

</html>