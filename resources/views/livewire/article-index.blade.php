<div class="w-3/4 mx-auto">
    @foreach ($articles as $article)
        <div class="p-3 mt-5" wire:key="article-{{ $article->id }}">
            <h3 class="text-2xl text-blue-500 hover:text-blue-700">
                <a wire:navigate href="/articles/{{ $article->id }}">{{ $article->title }}</a>
            </h3>
            <p>{{ str($article->content)->words(30) }}</p>
        </div>
    @endforeach
</div>
