<x-space-layout>
    <x-slot name="content">
        <div>
            <div class="mb-2">
                <h1 class="text-6xl">{{ $universe->name }}</h1>
                <p>{{ $universe->size_in_km }} km wide</p>
            </div>

            <p class="text-sm">planets:</p>
            <ul>
            @foreach ($universe->planets as $planet)
                <li class="text-sm hover:text-green-300"><a href="{{ url('space/planets', $planet->id) }}">- {{ $planet->name }}</a></li>
            @endforeach
            </ul>
        </div>
    </x-slot>
</x-space-layout>
