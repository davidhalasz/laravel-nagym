<?php

namespace App\Http\Livewire;
use App\Models\Esemeny;
use Livewire\Component;
use Livewire\WithFileUploads;

class EsemenyForm extends Component
{
    use WithFileUploads;

    public $title;
    public $filepath;
    public $startDate;
    public $endDate;

    private function resetInputFields(){
        $this->title = '';
        $this->filepath = '';
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'filepath' => 'required|mimes:pdf,jpg,png,jpeg',
        ],
        [
            'title.required' => 'Leírás megadása kötelező',
            'filepath.required' => 'Fájl kiválasztása kötelező',
        ]);

        $originalFileName = $this->filepath->getClientOriginalName();
        $data = [
            'title' => $this->title,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'filepath' => $originalFileName
        ];

        if(!empty($this->filepath)) {
            $this->filepath->storeAs('public/esemenyek', $originalFileName);
        }
        Esemeny::create($data);
        $this->resetInputFields();
        session()->flash('message', 'Esemeny sikeresen hozzáadva.');
    }
    public function render()
    {
        date_default_timezone_set('Europe/Budapest');
        $date = date('Y-m-d');
        $this->startDate = $date;

        return view('livewire.esemeny-form', [
            'currentDate' => $date,
            $this->startDate = $date,
        ]);
    }
}
