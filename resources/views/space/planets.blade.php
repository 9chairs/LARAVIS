<x-space-layout>
    <x-slot name="content">
        <div>
            @foreach ($planets as $planet)
                <h1 class="text-xl hover:text-red-300"><a href="{{ url('/space/planets', $planet->id) }}">{{ $planet->name }}</a></h1>
                <p class="text-sm hover:text-green-300"><a href="{{ url('/space/universes', $planet->universe->name) }}">{{ $planet->universe->name }}</a></p>
            @endforeach
        </div>
    </x-slot>
</x-space-layout>
