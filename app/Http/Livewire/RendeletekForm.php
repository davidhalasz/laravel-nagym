<?php

namespace App\Http\Livewire;
use App\Models\Rendelet;
use Livewire\Component;
use Livewire\WithFileUploads;

class RendeletekForm extends Component
{   
    use WithFileUploads;
    public $year;
    public $title;
    public $filename;
 
    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'filename' => 'required|mimes:pdf,doc,docx,jpg,png,jpeg',
            'year' => 'required',
        ]);

        $originalFileName = $this->filename->getClientOriginalName();
        $data = [
            'title' => $this->title,
            'filename' => $originalFileName,
            'year' => $this->year,
        ];

        if(!empty($this->filename)) {
            $this->filename->storeAs('public/rendeletek/'.$this->year, $originalFileName);
        }
        Rendelet::create($data);

        return redirect()->to('/admin/rendeletek');
    }

    public function render()
    {
        $this->currentYear = now()->year;
        return view('livewire.rendeletek-form');
    }
}
