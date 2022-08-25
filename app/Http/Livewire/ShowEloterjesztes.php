<?php

namespace App\Http\Livewire;
use App\Models\Eloterjesztes;
use App\Models\EloterjesztesCim;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class ShowEloterjesztes extends Component
{
    public function render()
    {
        return view('livewire.show-eloterjesztes', [
            'cimek' => EloterjesztesCim::latest()->get(),
            'eloterjesztesek' => Eloterjesztes::latest()->get()
        ]);
    }

    private function removeCimById($id) {
        $count = Eloterjesztes::where('title_id', $id)->count();
        if($count == 0) {
            $cim=EloterjesztesCim::findOrFail($id);
            $cim->delete();
        }
    }

    public function delete($id)
    {
        $eloterjesztes=Eloterjesztes::findOrFail($id);
        if(Storage::exists('public/eloterjesztesek/'.$eloterjesztes->filepath)){
            Storage::delete('public/eloterjesztesek/'.$eloterjesztes->filepath);
            $eloterjesztes->delete();
            $this->removeCimById($eloterjesztes->title_id);
        } else{
            dd('File does not exists.');
        }
    }
}
