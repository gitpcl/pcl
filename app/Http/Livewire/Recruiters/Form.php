<?php

namespace App\Http\Livewire\Recruiters;

use Livewire\Component;
use App\Models\Recruiters;

class Form extends Component
{
    public $first_name, $last_name, $company, $company_url, $phone, $cell, $email, $show = false;

    protected $listeners = [
        'buttonClicked' => 'toggleShow',
        'closeModal' => 'hideModal'
    ];

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'company' => 'required',
        'company_url' => 'required|url',
        'phone' => 'regex:/^(\d{3}-\d{3}-\d{4})$/',
        'cell' => 'required|regex:/^(\d{3}-\d{3}-\d{4})$/',
        'email' => 'required|email',
    ];

    public function toggleShow()
    {
        $this->show = true;
    }

    public function hideModal()
    {
        $this->show = false;
    }

    public function saveAndDownload()
    {
        $this->validate();

        Recruiters::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'company' => $this->company,
            'company_url' => $this->company_url,
            'phone' => $this->phone,
            'cell' => $this->cell,
            'email' => $this->email,
        ]);

        // Assuming you have your resume in the public directory named "PedroLopes_Resume.pdf"
        return redirect()->to('/PedroLopes_Resume.pdf');

        $this->emit('downloaded');
    }

    public function render()
    {
        return view('livewire.recruiters.form');
    }
}
