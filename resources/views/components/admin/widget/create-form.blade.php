<form action="{{route('widgets.store')}}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf

    <!-- Name -->
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Widget Name:</label>
        <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
        @error('name')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Description -->
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Options:</label>
        <textarea id="description" name="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        @error('options')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <label for="countries_multiple" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a posts</label>
    <select multiple id="posts" name="posts[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach($posts as $post)
            <option value="{{$post->id}}">{{$post->postable->name}}</option>
        @endforeach
    </select>

    <!-- Submit Button -->
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-emerald-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Create Widget
        </button>
    </div>
</form>
