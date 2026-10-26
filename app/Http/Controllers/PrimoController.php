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
            ["id"=> 1,"nome" => "Bruce Dickinson", "subject"=> "Voce"],
            ["id"=> 2,"nome" => "Steve Harrys", "subject"=> "Basso"],
            ["id"=> 3,"nome" => "Nicko McBrain", "subject"=> "Batteria"],
            ["id"=> 4,"nome" => "Dave Murray", "subject"=> "Chitarra"]
        ];
        return view('artisti', ["artisti"=>$artisti]);

    }

    public function dettaglioArtisti ($id){
        $artisti= [
            ["id"=> 1,"nome" => "Bruce Dickinson", "subject"=> "Voce"],
            ["id"=> 2,"nome" => "Steve Harrys", "subject"=> "Basso"],
            ["id"=> 3,"nome" => "Nicko McBrain", "subject"=> "Batteria"],
            ["id"=> 4,"nome" => "Dave Murray", "subject"=> "Chitarra"]
        ];
        foreach ($artisti as $artista) {
            if ($id == $artista["id"]){
                return view("dettaglioartisti", ["artista"=>$artista]);
            };
        };
    }
}
