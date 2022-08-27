<?php

namespace App\Http\Livewire;
use App\Models\Velemeny;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ShowVelemeny extends Component
{
    public function render()
    {
        return view('livewire.show-velemeny', [
            'velemenyezesek' => Velemeny::latest()->get()
        ]);
    }

    public function delete($id)
    {

        $velemenyezes=Velemeny::findOrFail($id);
        if(Storage::exists('public/velemenyezesek/'.$velemenyezes->filename)){
            Storage::delete('public/velemenyezesek/'.$velemenyezes->filename);
            $velemenyezes->delete();
        }else{
            dd('File does not exists.');
        }
    }
}
