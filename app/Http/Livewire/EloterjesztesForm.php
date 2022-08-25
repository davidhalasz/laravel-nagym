<?php

namespace App\Http\Livewire;
use App\Models\EloterjesztesCim;
use App\Models\Eloterjesztes;
use Livewire\Component;
use Livewire\WithFileUploads;

class EloterjesztesForm extends Component
{
    use WithFileUploads;

    public $title;
    public $title_id;
    public $filename;
    public $filepath;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    } 
 
    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields(){
        $this->title = '';
        $this->filename = '';
        $this->filepath = '';
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'filename.0' => 'required',
            'filepath.0' => 'required|mimes:pdf,doc,docx,jpg,png,jpeg',
            'filename.*' => 'required',
            'filepath.*' => 'required|mimes:pdf,doc,docx,jpg,png,jpeg',
        ],
        [
            'title.required' => 'Cím mező megadása kötelező',
            'filename.0.required' => 'Fájlnév mező megadása kötelező',
            'filepath.0.required' => 'Fájl kiválasztása kötelező',
            'filename.*.required' => 'Fájlnév mező megadása kötelező',
            'filepath.*.required' => 'Fájl kiválasztása kötelező',
        ]);


        $insertTitle = EloterjesztesCim::create([
            'title' => $this->title,
        ]); 

        foreach ($this->filename as $key => $value) {
            $originalFileName =$this->filepath[$key]->getClientOriginalName();
            if(!empty($this->filepath[$key])) {
                $this->filepath[$key]->storeAs('public/eloterjesztesek', $originalFileName);
            }
            Eloterjesztes::create(['title_id' => $insertTitle->id, 'filename' => $this->filename[$key], 'filepath' => $originalFileName]);
        }

        $this->inputs = [];
        $this->resetInputFields();
        session()->flash('message', 'Előterjesztés sikeresen hozzáadva.');
    }

    public function render()
    {
        return view('livewire.eloterjesztes-form');
    }
}
