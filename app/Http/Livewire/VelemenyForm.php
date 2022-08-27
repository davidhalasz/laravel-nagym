<?php

namespace App\Http\Livewire;
use App\Models\Velemeny;
use Livewire\Component;
use Livewire\WithFileUploads;

class VelemenyForm extends Component
{
    use WithFileUploads;

    public $description;
    public $filename;
    public $filepath;

    private function resetInputFields(){
        $this->description = '';
        $this->filename = '';
        $this->filepath = '';
    }

    public function submit()
    {
        $this->validate([
            'description' => 'required',
            'filename' => 'required',
            'filepath' => 'required|mimes:pdf,doc,docx,jpg,png,jpeg',
        ],
        [
            'description.required' => 'Leírás megadása kötelező',
            'filename.required' => 'Tervezet / Fájlnév mező megadása kötelező',
            'filepath.required' => 'Fájl kiválasztása kötelező',
        ]);

        $originalFileName = $this->filepath->getClientOriginalName();
        $data = [
            'description' => $this->description,
            'filename' => $this->filename,
            'filepath' => $originalFileName
        ];

        if(!empty($this->filepath)) {
            $this->filepath->storeAs('public/velemenyezesek', $originalFileName);
        }
        Velemeny::create($data);
        $this->resetInputFields();
        session()->flash('message', 'Társadalmi véleményezés sikeresen hozzáadva.');
    }

    public function render()
    {
        return view('livewire.velemeny-form');
    }
}
