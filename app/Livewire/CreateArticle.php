<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use Livewire\Attributes\Title;
// use App\Models\Article;
// use Livewire\Attributes\Rule;
// use Livewire\Attributes\Validate;
// use Livewire\Component;

#[Title('Create Article')]
class CreateArticle extends AdminComponent
{
    // #[Validate(['required', 'string', 'max:255'])]
    // public $title = "";

    // #[Validate(['required', 'string'])]
    // public $content = "";

    // public function save()
    // {
    //     $this->validate();
    //     Article::create($this->all());
    //     $this->redirect('/dashboard/articles', navigate: true);
    // }

    public ArticleForm $form;
    public function save()
    {
        $this->form->store();

        $this->redirect('/dashboard/articles', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
