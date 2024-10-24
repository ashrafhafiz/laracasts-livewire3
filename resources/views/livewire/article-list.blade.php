<div class="w-3/4 mx-auto mb-4">
    <table>
        <thead class="text-xs text-gray-400 uppercase bg-gray-700">
            <tr>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3">Content</th>
                <th class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr class="text-gray-400 bg-gray-800 border-b border-gray-700" wire:key="article-{{ $article->id }}">
                    <td class="px-6 py-4">{{ $article->title }}</td>
                    <td class="px-6 py-4">{{ str($article->content)->limit(30) }}</td>
                    <td class="flex gap-2 px-6 py-4">
                        <button class="px-3 py-2 text-xs font-bold text-white bg-blue-500 rounded hover:bg-blue-700"
                            wire:click="edit({{ $article->id }})">
                            Edit
                        </button>
                        <button class="px-3 py-2 text-xs font-bold text-white bg-red-500 rounded hover:bg-red-700"
                            wire:click="delete({{ $article->id }})"
                            wire:confirm="Are you sure you want to delete this article?">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
