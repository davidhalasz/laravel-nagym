<?php

namespace App\Http\Livewire;
use App\Models\Hatarozat;
use App\Models\HatarozatCim;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ShowHatarozatok extends Component
{
    public function render()
    {
        return view('livewire.show-hatarozatok', [
            'cimek' => HatarozatCim::latest()->get(),
            'hatarozatok' => Hatarozat::latest()->get()
        ]);
    }

    private function removeCimById($id) {
        $count = Hatarozat::where('title_id', $id)->count();
        if($count == 0) {
            $cim=HatarozatCim::findOrFail($id);
            $cim->delete();
        }
    }

    public function delete($id)
    {
        $hatarozat=Hatarozat::findOrFail($id);
        if(Storage::exists('public/hatarozatok/'.$hatarozat->year.'/'.$hatarozat->filepath)){
            Storage::delete('public/hatarozatok/'.$hatarozat->year.'/'.$hatarozat->filepath);
            $hatarozat->delete();
            $this->removeCimById($hatarozat->title_id);
        } else{
            dd('File does not exists.');
        }
    }
}
