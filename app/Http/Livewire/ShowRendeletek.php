<?php

namespace App\Http\Livewire;
use App\Models\Rendelet;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ShowRendeletek extends Component
{
    public function render()
    {
        return view('livewire.show-rendeletek', [
            'rendeletek' => Rendelet::latest()->get()
        ]);
    }

    public function delete($id)
    {

        $rendelet=Rendelet::findOrFail($id);
        if(Storage::exists('public/rendeletek/'.$rendelet->year.'/'.$rendelet->filename)){
            Storage::delete('public/rendeletek/'.$rendelet->year.'/'.$rendelet->filename);
            $rendelet->delete();
        }else{
            dd('File does not exists.');
        }
    }
}
  