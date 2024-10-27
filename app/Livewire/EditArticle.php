<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
// use Livewire\Attributes\Validate;
// use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Edit Article')]
class EditArticle extends AdminComponent
{
    // #[Validate(['required', 'string', 'max:255'])]
    // public $title = "";

    // #[Validate(['required', 'string'])]
    // public $content = "";

    // public function mount(Article $article)
    // {
    //     $this->title = $article->title;
    //     $this->content = $article->content;
    // }

    // public function update(Article $article)
    // {
    //     $this->validate();

    //     $this->article->update($this->all());

    //     $this->redirect('/dashboard/articles', navigate: true);
    // }

    public ArticleForm $form;

    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function save(Article $article)
    {
        $this->form->update();

        $this->redirect('/dashboard/articles', navigate: true);
    }
    public function render()
    {
        return view('livewire.edit-article');
    }
}
