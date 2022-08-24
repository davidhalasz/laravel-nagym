<?php

namespace App\Http\Livewire;
use App\Models\HatarozatCim;
use App\Models\Hatarozat;
use Livewire\Component;
use Livewire\WithFileUploads;

class HatarozatForm extends Component
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
            'title.required' => 'title field is required',
            'filename.0.required' => 'filename field is required',
            'filepath.0.required' => 'filepath field is required',
            'filename.*.required' => 'filename field is required',
            'filepath.*.required' => 'filepath field is required',
        ]);


        $insertTitle = HatarozatCim::create([
            'title' => $this->title,
        ]); 

        foreach ($this->filename as $key => $value) {
            $originalFileName =$this->filepath[$key]->getClientOriginalName();
            if(!empty($this->filepath[$key])) {
                $this->filepath[$key]->storeAs('public/hatarozatok', $originalFileName);
            }
            Hatarozat::create(['title_id' => $insertTitle->id, 'filename' => $this->filename[$key], 'filepath' => $originalFileName]);
        }

        $this->inputs = [];
        $this->resetInputFields();
        session()->flash('message', 'Employee Has Been Created Successfully.');
    }

    public function render()
    {
        return view('livewire.hatarozat-form');
    }
}
