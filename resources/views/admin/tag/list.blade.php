<x-layouts.basic-admin>
    <!-- Header -->
    <div class="bg-white p-6 shadow-md mb-6">
        <h2 class="text-xl font-semibold">Tags</h2>
    </div>
    <!-- Content for the 'Projects' tab -->
    <div>
        <div class="flex justify-between items-center bg-white p-5 shadow-md mb-5">
            <a class="button bg-teal-400 text-white px-4 py-2 rounded hover:bg-green-500" title="create" href="{{route('tags.create')}}">Create Tag</a>
        </div>

        <!-- Table -->
        <x-admin.tag.table-list :tags="$tags"/>
    </div>
</x-layouts.basic-admin>
