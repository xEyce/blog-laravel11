<x-layout>
    <h2>EYCE's Blogs</h2>
    
    <ul>
        @foreach($eyces as $eyce)
            <li>
                <x-card href="{{ route('eyce.show', $eyce->id) }}" :highlight="$eyce['skill'] > 70">
                <div>
                    <h3>{{ $eyce->name }}</h3>
                    <p>{{ $eyce->village->name }}</p>
                </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $eyces->links() }}
</x-layout>
