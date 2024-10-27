<?php

namespace App\Livewire\Forms;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleForm extends Form
{
    public ?Article $article;

    #[Validate(['required', 'string', 'max:255'])]
    public $title = "";

    #[Validate(['required', 'string'])]
    public $content = "";

    public $published = false;

    public $notification = "none";

    public function setArticle(Article $article)
    {
        $this->article = $article;
        $this->title = $article->title;
        $this->content = $article->content;
        $this->published = $article->published;
        $this->notification = $article->notification;
    }

    public function store()
    {
        $this->validate();

        Article::create($this->all());
    }

    public function update()
    {
        $this->validate();
        $this->article->update($this->only(['title', 'content', 'published', 'notification']));
    }
}
