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
        <div class="flex justify-between items-center bg-white p-6 shadow-md mb-6">
            <h3 class="text-lg font-semibold">Projects</h3>
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Create Article</button>
        </div>

        <!-- Table -->
        <div class="bg-white p-6 shadow-md">
            <table class="min-w-full">
                <thead>
                <tr>
                    <th class="px-4 py-2 border-b border-gray-300">ID</th>
                    <th class="px-4 py-2 border-b border-gray-300">Title</th>
                    <th class="px-4 py-2 border-b border-gray-300">Author</th>
                    <!-- Add other headers as needed -->
                </tr>
                </thead>
                <tbody>
                <!-- You can loop through your articles here -->
                <tr>
                    <td class="px-4 py-2 border-b border-gray-300">1</td>
                    <td class="px-4 py-2 border-b border-gray-300">Sample Article</td>
                    <td class="px-4 py-2 border-b border-gray-300">John Doe</td>
                </tr>
                <!-- Repeat for other articles -->
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.basic-admin>

