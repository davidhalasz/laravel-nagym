<?php

namespace App\Http\Livewire;
use App\Models\Meghivo;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
class ShowMeghivo extends Component
{
    public function render()
    {
        return view('livewire.show-meghivo', [
            'meghivok' => Meghivo::latest()->get()
        ]);
    }

    public function delete($id)
    {

        $meghivo=Meghivo::findOrFail($id);
        if(Storage::exists('public/meghivok/'.$meghivo->filename)){
            Storage::delete('public/meghivok/'.$meghivo->filename);
            $meghivo->delete();
        }else{
            dd('File does not exists.');
        }
    }
}
