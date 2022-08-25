<?php

namespace App\Http\Livewire;
use App\Models\Jegyzokonyv;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ShowJegyzokonyv extends Component
{
    public function render()
    {
        return view('livewire.show-jegyzokonyv', [
            'jegyzokonyvek' => Jegyzokonyv::latest()->get()
        ]);
    }

    public function delete($id)
    {

        $jegyzokonyv=Jegyzokonyv::findOrFail($id);
        if(Storage::exists('public/jegyzokonyvek/'.$jegyzokonyv->filename)){
            Storage::delete('public/jegyzokonyvek/'.$jegyzokonyv->filename);
            $jegyzokonyv->delete();
        }else{
            dd('File does not exists.');
        }
    }
}
