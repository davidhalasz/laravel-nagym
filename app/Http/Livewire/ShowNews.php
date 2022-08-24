<?php

namespace App\Http\Livewire;
use App\Models\News;
use Livewire\Component;

class ShowNews extends Component
{
    public function render()
    {
        return view('livewire.show-news', [
            'news' => News::latest()->get()
        ]);
    }

    public function delete($id)
    {
        $hir=News::findOrFail($id);
        $hir->delete();
    }
}


