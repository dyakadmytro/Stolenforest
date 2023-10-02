<x-layouts.basic-admin>
    <!-- Header -->
    <div class="bg-white p-6 shadow-md mb-6">
        <h2 class="text-xl font-semibold">Posts</h2>
    </div>

    <!-- Tabs -->
    <div class="flex mb-4 border-b">
        <button class="py-2 px-6 focus:outline-none bg-blue-500 text-white font-semibold">Projects</button>
        <button class="py-2 px-6 focus:outline-none text-gray-600 font-semibold hover:bg-gray-100">Articles</button>
    </div>

    <!-- Content for the 'Projects' tab -->
    <div>
        <div class="flex justify-between items-center bg-white p-5 shadow-md mb-5">
            <a class="button bg-teal-400 text-white px-4 py-2 rounded hover:bg-green-500" title="create" href="{{route('projects.create')}}">Create Project</a>
        </div>

        <!-- Table -->
        <x-admin.project.table-list :projects="$projects"/>
    </div>
</x-layouts.basic-admin>

