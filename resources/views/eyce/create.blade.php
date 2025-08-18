<x-layout>
    <form action="" method="POST">
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
        required
    >

    <!-- ninja Bio -->
    <label for="bio">Biography:</label>
    <textarea
        rows="5"
        id="bio" 
        name="bio" 
        required
    ></textarea>

    <!-- select a dojo -->
    <label for="village_id">Company:</label>
    <select id="village_id" name="village_id" required>
        <option value="" disabled selected>Select a company</option>
        @foreach($villages as $village)
            <option value="{{ $village->id }}">{{ $village->name }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create List</button>

    <!-- validation errors -->
    
    </form>
</x-layout>