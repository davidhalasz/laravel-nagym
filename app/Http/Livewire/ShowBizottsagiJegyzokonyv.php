<?php

namespace App\Http\Livewire;
use App\Models\BizottsagiJegyzokonyv;
use Livewire\Component;

class ShowBizottsagiJegyzokonyv extends Component
{
    public function render()
    {
        return view('livewire.show-bizottsagi-jegyzokonyv', [
            'years' => BizottsagiJegyzokonyv::select("year")->distinct()->get()
        ]);
    }
}
