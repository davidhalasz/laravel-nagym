<?php

namespace App\Http\Livewire;
use App\Models\BizottsagiJegyzokonyv;
use Livewire\Component;

class ShowBizottsagiJegyzokonyvYears extends Component
{
    public function render()
    {
        return view('livewire.show-bizottsagi-jegyzokonyv-years', [
            'years' => BizottsagiJegyzokonyv::select("year")->distinct()->get()->sortDesc()
        ]);
    }
}
