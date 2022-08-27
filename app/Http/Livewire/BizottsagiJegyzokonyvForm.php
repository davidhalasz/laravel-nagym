<?php

namespace App\Http\Livewire;
use App\Models\BizottsagiJegyzokonyv;
use Livewire\Component;
use Livewire\WithFileUploads;

class BizottsagiJegyzokonyvForm extends Component
{
    use WithFileUploads;
    public $year;
    public $title;
    public $filename;

    private function resetInputFields(){
        $this->title = '';
        $this->filename = '';
    }

    public function submit()
    {

        $this->validate([
            'title' => 'required',
            'filename' => 'required|mimes:pdf,doc,docx,jpg,png,jpeg',
            'year' => 'required',
        ],
        [
            'title.required' => 'Jegyzőkönyv címének megadása kötelező',
            'filename.required' => 'Fájl kiválasztása kötelező',
        ]);

        $originalFileName = $this->filename->getClientOriginalName();
        $data = [
            'title' => $this->title,
            'filename' => $originalFileName,
            'year' => $this->year,
        ];

        if(!empty($this->filename)) {
            $this->filename->storeAs('public/bizottsagiJegyzokonyvek/'.$this->year, $originalFileName);
        }
        BizottsagiJegyzokonyv::create($data);
        $this->resetInputFields();
        session()->flash('message', 'Bizottsági jegyzőkönyv sikeresen hozzáadva.');
    }

    public function render()
    {
        $this->currentYear = now()->year;
        return view('livewire.bizottsagi-jegyzokonyv-form');
    }
}
 