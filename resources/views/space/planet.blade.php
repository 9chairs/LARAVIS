<x-space-layout>
    <x-slot name="content">
        <div>
            <div class="mb-2">
                <h1 class="text-6xl">{{ $planet->name }}</h1>
                <p>Age: {{ $planet->age }}</p>
                <p class="max-w-md">Description: {{ $planet->description }}</p>
                <p class="text-sm">Universe: <a class="hover:text-red-300" href="{{ url('/space/universes', $planet->universe->name) }}">{{ $planet->universe->name }}</a></p>
            </div>
        </div>
    </x-slot>
</x-space-layout>
