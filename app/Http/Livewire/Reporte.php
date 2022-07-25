<?php

namespace App\Http\Livewire;
use App\Models\jugadores;
use App\Models\equipos;
use App\Models\presindente;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use PDF;

class Reporte extends Component
{
    public function render()
    {

        $jugadores= jugadores::all();
        return view('livewire.reporte',compact('jugadores'));

        
        // $presidente=presidente::all();
        // return view('livewire.reporte', compact('presidente'));

    }

    public function reporte()
    {
        $jugadores=DB::table('jugadores')
        ->select('jugadores.*')
        ->get();

        return PDF::loadview('livewire.reporte',compact('jugadores'))
        ->stream('reporte2222.pdf');
 
    }
    

}
