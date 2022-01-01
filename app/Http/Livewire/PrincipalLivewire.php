<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class PrincipalLivewire extends Component
{
    public $pays;
    public $villes;

    public $selectPays = NULL;
    public $selectVille = NULL;

    public function mount()
    {
        $this->pays = Country::all();
        $this->villes = collect();
    }
    public function render()
    {
        return view('livewire.principal-livewire');
    }
    public function updatedSelectPays($p)
    {
        
        if (!empty($p)) {
            $id = explode(" - ", $p);
            $pays = Country::find($id[0]);
            $this->villes = $pays->cities;            
        }
    }
}
