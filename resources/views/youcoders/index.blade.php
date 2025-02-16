<x-layout>

    <h2>The List of All YouCoders</h2>

    <ul>
        @foreach($youcoders as $youcoder)
            <li>
                <x-card href="/youcoders/{{ $youcoder['id'] }}">
                    <h3>{{ $youcoder['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

</x-layout>
