<div class="bg-white p-6 shadow-md">
    <table class="min-w-full">
        <thead>
        <tr>
            <th class="px-4 py-2 border-b border-gray-300">Name</th>
            <th class="px-4 py-2 border-b border-gray-300">Usage</th>
        </tr>
        </thead>
        <tbody class="text-gray-700">
        @foreach ($tags as $tag)
            <tr class="hover:bg-slate-200">
                <td class="px-4 py-2 border-b border-gray-300">{{$tag->name}}</td>
                <td class="px-4 py-2 border-b border-gray-300">{{$tag->posts_amount}}</td>
                <td class="px-4 py-2 border-b border-gray-300 ">
                    <div class="inline-block" >
                        <a href="{{route('tags.edit', ['tag' => $tag->id])}}" >
                            <button class="bg-orange-400 rounded p-2 hover:bg-orange-500" title="edit">
                                <svg class="h-4 w-4 text-white" viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />  <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" /></svg>
                            </button>
                        </a>
                    </div>
                    <div class="inline-block" >
                        <form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-400 rounded p-2 hover:bg-red-500" title="delete">
                                <svg class="h-4 w-4 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
