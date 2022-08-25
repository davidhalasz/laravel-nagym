<?php

namespace App\Http\Livewire;
use App\Models\Meghivo;
use Livewire\Component;
use Livewire\WithFileUploads;

class MeghivoForm extends Component
{
    use WithFileUploads;

    public $title;
    public $filename;

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'filename' => 'required|mimes:pdf,doc,docx,jpg,png,jpeg',
        ]);

        $originalFileName = $this->filename->getClientOriginalName();
        $data = [
            'title' => $this->title,
            'filename' => $originalFileName
        ];

        if(!empty($this->filename)) {
            $this->filename->storeAs('public/meghivok', $originalFileName);
        }
        Meghivo::create($data);

        return redirect()->to('/admin/meghivok');
    }

    public function render()
    {
        return view('livewire.meghivo-form');
    }
}
