<?php

namespace App\Http\Livewire;
use App\Models\Jegyzokonyv;
use Livewire\Component;
use Livewire\WithFileUploads;

class JegyzokonyvForm extends Component
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
            $this->filename->storeAs('public/jegyzokonyvek', $originalFileName);
        }
        Jegyzokonyv::create($data);

        return redirect()->to('/admin/jegyzokonyvek');
    }

    public function render()
    {
        return view('livewire.jegyzokonyv-form');
    }
}
