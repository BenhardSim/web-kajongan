<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        return view("artikel");
    }

    public function readArticle($id){
        return view("read",[
            "id" => $id
        ]);
    }
}
