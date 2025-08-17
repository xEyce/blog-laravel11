<x-layout>
    <h2>{{ $eyce->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill Level: </strong>{{ $eyce->skill }}</p>
        <p><strong>About Me: </strong></p>
        <p>{{ $eyce->bio }}</p>
    </div>
</x-layout>