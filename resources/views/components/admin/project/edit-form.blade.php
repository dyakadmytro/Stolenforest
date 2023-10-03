<form action="{{route('projects.update', ['project' => $project->id])}}" method="POST" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf

    <!-- Name -->
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Project Name:</label>
        <input type="text" id="name" name="name" value="{{$project->name}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        @error('name')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Link -->
    <div class="mb-4">
        <label for="link" class="block text-gray-700 text-sm font-bold mb-2">Link:</label>
        <input type="text" id="link" name="link" value="{{$project->link}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        @error('link')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <!-- Description -->
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea id="description" name="description" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >{{$project->description}}</textarea>
        @error('description')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>

    <label for="countries_multiple" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a tags</label>
    @error('tags')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
    <select multiple id="tags" name="tags[]" class="my-8 bg-gray-50 border border-gray-300 text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-300 dark:border-gray-600 dark:placeholder-gray-200 dark:text-gray-700 dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @foreach($tags as $tag)
            <option value="{{$tag->id}}" {{ $project->post->tags->contains(function ( $model) use($tag) {
                        return $tag->id === $model->id;
            })? 'selected' : ''  }}>{{$tag->name}}</option>
        @endforeach
    </select>

    <!-- Cover img preview -->
    <div class="mb-4">
        <div class="card">
            <img src="{{'/storage/'.$project->cover->path}}">
        </div>
    </div>

    <!-- Cover Image ID -->
    <!-- This assumes you have a dropdown list of image IDs. Adjust accordingly. -->
    @error('cover_img')
    <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
    <div class="mb-4">
        <div class="flex items-center justify-center w-full">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-200 dark:bg-gray-200 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gradient-to-l dark:hover:from-violet-100 dark:hover:via-rose-100 dark:hover:to-yellow-100">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" name="cover_img" class="hidden" />
            </label>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="flex items-center justify-between">
        <button type="submit" class="bg-emerald-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Update Project
        </button>
    </div>
</form>
