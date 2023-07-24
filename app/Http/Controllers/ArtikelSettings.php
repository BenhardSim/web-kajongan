<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelSettings extends Controller
{
    public function addArtikel(){
        return view("addartikel");
    }

    public function postArticle(Request $request){
        // return dd($request->all());
        $validatedData = $request->all();
        $validator = Validator::make($request->all(),[
            "title" => "required",
            "author" => "required",
            "thumbnail" => "required",
            "article-trixFields" => "required",
        ]);

        if($validator->fails()){
            alert()->error('Field Kosong','semua field form harus terisi');
            return back();
        };

        $img = $request->file('thumbnail');
        $id = artikel::max('id') + 1;
        $name = "artikel-img-".$id.".".$img->extension();
        $img->move(public_path('assets/artikelImage'),$name);
        artikel::create([
            "author" => request("author"),
            "title" => request("title"),
            "thumbnail" => $name,
            "article" => json_encode(request("article-trixFields")['contents'])
        ]);

        alert()->success('Berhasil Ditambahkakn','Artikel Berhasil ditambahkan');
        return back();
    }
}
