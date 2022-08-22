<?php

namespace App\Http\Livewire;
use App\Models\News;
use Livewire\Component;

class NewsForm extends Component
{
    public $title;
    public $body;

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:6',
            'body' => 'required',
        ]);

        News::create($validatedData);

        return redirect()->to('/admin/news');
    }

    public function render()
    {
        return view('livewire.news-form');
    }
}
