<?php

namespace App\Http\Livewire;
use App\Models\Esemeny;
use Livewire\Component;

class ShowEsemeny extends Component
{
    public function render()
    {
        return view('livewire.show-esemeny', [
            'esemenyek' => Esemeny::latest()->get()
        ]);
    }
}
 