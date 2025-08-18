<x-layout>
    <form action="{{ route('eyce.store') }}" method="POST">
    @csrf

    <h2>Create a New List</h2>

    <!-- ninja Name -->
    <label for="name">Person Name:</label>
    <input 
        type="text" 
        id="name" 
        name="name" 
        value="{{ old('name') }}" 
        required
    >

    <!-- ninja Strength -->
    <label for="skill">Person Skill (0-100):</label>
    <input 
        type="number" 
        id="skill" 
        name="skill" 
        value="{{ old('skill') }}" 
        required
    >

    <!-- ninja Bio -->
    <label for="bio">Biography:</label>
    <textarea
        rows="5"
        id="bio" 
        name="bio" 
        
        required
    >{{ old('bio') }}</textarea>

    <!-- select a dojo -->
    <label for="village_id">Company:</label>
    <select id="village_id" name="village_id" required>
        <option value="" disabled selected>Select a company</option>
        @foreach($villages as $village)
            <option value="{{ $village->id }}" {{ $village->id == old('village_id') ? 'selected' : '' }}>
                {{ $village->name }}
            </option>
        @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create List</button>

    <!-- validation errors -->
    @if($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            @foreach($errors->all() as $error)
                <li class="my-2 text-red-500">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    </form>
</x-layout>