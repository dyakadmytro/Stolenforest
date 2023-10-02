<form action="{{route('projects.create')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf

    <!-- Name -->
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Project Name:</label>
        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>

    <!-- Link -->
    <div class="mb-4">
        <label for="link" class="block text-gray-700 text-sm font-bold mb-2">Link:</label>
        <input type="text" id="link" name="link" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>

    <!-- Description -->
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea id="description" name="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
    </div>

    <!-- Cover Image ID -->
    <!-- This assumes you have a dropdown list of image IDs. Adjust accordingly. -->
    <div class="mb-4">
        <label for="cover_img_id" class="block text-gray-700 text-sm font-bold mb-2">Cover Image:</label>
        <select id="cover_img_id" name="cover_img_id" class="block w-full py-2 px-3 border rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            <!-- Fetch available image IDs from the database and list them as options -->
            @foreach (\App\Models\Image::all() as $image)
                <option value="{{ $image->id }}">{{ $image->id }}</option>
            @endforeach
        </select>
    </div>

    <!-- Submit Button -->
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Create Project
        </button>
    </div>
</form>
