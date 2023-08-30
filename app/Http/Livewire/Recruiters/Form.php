<?php

namespace App\Http\Livewire\Recruiters;

use Livewire\Component;
use App\Models\Recruiters;
use Illuminate\Support\Facades\Storage;

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
        // 'phone' => 'regex:/^\+\d{1,3} \(\d{3}\) \d{3}-\d{4}$/',
        // 'cell' => 'required|regex:/^\+\d{1,3} \(\d{3}\) \d{3}-\d{4}$/',
        'phone' => '',
        'cell' => 'required',
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

        session(['download' => true]);

        // Emit an event to the Blade view to initiate the download
        $this->emit('initiateDownloadAndRedirect');

        // Hide the modal
        $this->hideModal();
    }

    public function render()
    {
        return view('livewire.recruiters.form');
    }
}
