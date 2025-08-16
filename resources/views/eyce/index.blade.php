<x-layout>
    <h2>EYCE's Blogs</h2>
    
    @if($greeting == "Welcome to my Blog page!")
        <p>{{ $greeting}}</p>
    @endif

    <ul>
        @foreach($blogs as $blog)
            <li>
                <p>{{ $blog["title"] }}</p>
                <a href="/eyce/{{ $blog["id"] }}">View Details</a>
            </li>
        @endforeach
    </ul>

    <a href="/">Back</a>
</x-layout>
