<?php

namespace App\Http\Livewire;
use App\Models\jugadores;
use App\Models\equipos;
use App\Models\presindente;
use Livewire\Component;
use Livewire\WithFileUploads;

class Reporte extends Component
{
    public function render()
    {
        
        $equipos=equipos::all();
        return view('livewire.reporte', compact('equipos'));


    }


}
