<x-layouts.basic-admin>
    <div class="bg-white p-6 shadow-md mb-6">
        <h2 class="text-xl font-semibold">Edit Widget</h2>
    </div>
    <x-admin.widget.edit-form :posts="$posts" :widget="$widget"/>
</x-layouts.basic-admin>
