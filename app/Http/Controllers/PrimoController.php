<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimoController extends Controller
{
    public function homepage (){
        return view('welcome');
    }

    public function artisti(){
        $artisti= [
            ["nome" => "Bruce Dickinson", "subject"=> "Voce"],
            ["nome" => "Steve Harrys", "subject"=> "Basso"],
            ["nome" => "Nicko McBrain", "subject"=> "Batteria"],
            ["nome" => "Dave Murray", "subject"=> "Chitarra"]
        ];
        return view('artisti', ["artisti"=>$artisti]);

    }

    public function dettaglioArtisti ($nome){
        $artisti= [
            ["nome" => "Bruce Dickinson", "subject"=> "Voce"],
            ["nome" => "Steve Harrys", "subject"=> "Basso"],
            ["nome" => "Nicko McBrain", "subject"=> "Batteria"],
            ["nome" => "Dave Murray", "subject"=> "Chitarra"]
        ];
        foreach ($artisti as $artista) {
            if ($nome == $artista["nome"]){
                return view("dettaglioartisti", ["artista"=>$artista]);
            };
        };
    }
}
