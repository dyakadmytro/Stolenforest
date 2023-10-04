<form action="{{route('widgets.update', ['widget' => $widget->id])}}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf

    <!-- Name -->
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Widget Name:</label>
        <input type="text" id="name" name="name" value="{{$widget->name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        @error('name')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Description -->
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea id="description" name="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >{{$widget->description}}</textarea>
        @error('description')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <label for="countries_multiple" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a tags</label>

    <select multiple id="posts" name="posts[]" class="my-8 bg-gray-50 border border-gray-300 text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-200 dark:text-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach($posts as $post)
            <option value="{{$tag->id}}" {{ $widget->posts->contains(function ( $model) use($post) {
                        return $post->id === $model->id;
            })? 'selected' : ''  }}>{{$post->name}}</option>
        @endforeach
    </select>

    <!-- Submit Button -->
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-emerald-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Update widget
        </button>
    </div>
</form>
