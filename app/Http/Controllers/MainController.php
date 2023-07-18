<?php

namespace App\Http\Controllers;

use App\Models\KepalaDesa;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        // retrive data from database
        $kades = KepalaDesa::orderBy('id', 'desc')->first();
        return view("welcome",[
            "kades_name" => $kades->name,
            "photo_kades" => $kades->photo_url
        ]);
    }
}
