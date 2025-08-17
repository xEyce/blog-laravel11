<x-layout>
    <h2>EYCE's Blogs</h2>
    
    @if($greeting == "Welcome to my Blog page!")
        <p>{{ $greeting}}</p>
    @endif

    <ul>
        @foreach($blogs as $blog)
            <li>
                <x-card href="/eyce/{{ $blog['id'] }}" :highlight="$blog['skill'] > 70">
                <h3>{{ $blog["title"] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

    <a href="/" class="btn">Back</a>
</x-layout>
