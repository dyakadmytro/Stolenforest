<form action="{{route('tags.update', ['tag' => $tag->id])}}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('PUT')
    <!-- Name -->
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Tag Name:</label>
        <input type="text" id="name" name="name" value="{{$tag->name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
        @error('name')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <!-- Submit Button -->
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-emerald-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Update Tag
        </button>
    </div>
</form>
