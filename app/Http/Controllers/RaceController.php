<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RaceController extends Controller
{
    public function razza(){
        $razze=[
            ['id'=>1, 'razza'=>'Nano', 'foto'=>'/media/nani.png', 'dettagli'=>'un piccolo omino molto arrabiato'],
            ['id'=>2, 'razza'=>'Tauren', 'foto'=>'/media/tauren.png', 'dettagli'=>'Non farlo imbufalire'],
            ['id'=>3, 'razza'=>'Troll', 'foto'=>'/media/troll.png', 'dettagli'=>'We Cumpà!!!'],
           
        ];
        return view('razze',['razza' => $razze]);
        
    }
}