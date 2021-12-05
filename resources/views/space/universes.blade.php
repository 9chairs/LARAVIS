@dd($universes)
<x-space-layout>
    <x-slot name="content">
        <div class="">
        @foreach ($universes as $universe)
            <h4 class="text-xl hover:text-red-300"><a href="{{ url('space/universes', [$universe->name]) }}">{{ $universe->name }}</a></h4>
            <p class="text-sm">The 3 biggest planets:</p>
            <ul>
            @foreach ($universe->planets as $planet)
                <li class="text-sm hover:text-green-300"><a href="{{ url('/space/planets', $planet->id) }}">- {{ $planet->name }}</a></li>
            @endforeach
            </ul>
        @endforeach
        </div>
    </x-slot>
</x-space-layout>
