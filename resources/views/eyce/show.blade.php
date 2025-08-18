<x-layout>
    <h2>{{ $eyce->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill Level: </strong>{{ $eyce->skill }}</p>
        <p><strong>About Me: </strong></p>
        <p>{{ $eyce->bio }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Company Information</h3>
        <p><strong>Company Name: </strong>{{ $eyce->village->name }}</p>
        <p><strong>Location: </strong>{{ $eyce->village->location }}</p>
        <p><strong>Description: </strong>{{ $eyce->village->description }}</p>
    </div>

    <form action="{{ route('eyce.destroy', $eyce->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button  type="submit" class="btn my-4">Delete</button>
    </form>
</x-layout>