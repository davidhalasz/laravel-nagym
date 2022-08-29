<?php

namespace App\Http\Livewire;
use App\Models\BizottsagiJegyzokonyv;
use Livewire\Component;

class ShowBizottsagiJegyzokonyv extends Component
{
    public function render()
    {
        return view('livewire.show-bizottsagi-jegyzokonyv', [
            'jegyzokonyvek' => BizottsagiJegyzokonyv::latest()->get(),
        ]);
    }

    public function delete($id)
    {

        $jegyzokonyv=Jegyzokonyv::findOrFail($id);
        if(Storage::exists('public/bizottsagiJegyzokonyvek/'.$jegyzokonyv->year.'/'.$jegyzokonyv->filename)){
            Storage::delete('public/bizottsagiJegyzokonyvek/'.$jegyzokonyv->year.'/'.$jegyzokonyv->filename);
            $jegyzokonyv->delete();
        }else{
            dd('File does not exists.');
        }
    }
}
