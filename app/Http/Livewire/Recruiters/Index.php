<?php

namespace App\Http\Livewire\Recruiters;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Recruiters;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $recruiters = Recruiters::where('first_name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.recruiters.index', compact('recruiters'));
    }

    public function delete($id)
    {
        Recruiters::find($id)->delete();
    }
}
