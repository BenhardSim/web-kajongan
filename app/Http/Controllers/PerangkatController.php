<?php

namespace App\Http\Controllers;

use App\Models\KepalaDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PerangkatController extends Controller
{

    public function postPerangkat(Request $request, $pangkat){
        $validatedData = $request->all();
        $validator = Validator::make($request->all(),[
            "name" => "required",
            "photo_url" => "required",
        ]);

        if($validator->fails()){
            alert()->error('Field Kosong','semua field form harus terisi');
            return back();
        };

        $img = $request->file('photo_url');
        $name = "";
        $id = 0;
        if($pangkat == "kepala"){
            $id = KepalaDesa::max('id') + 1;
            $name = 'kepala-desa-'.$id.'.'.$img->extension();
        }else if($pangkat == "sekre"){
            $id = KepalaDesa::max('id') + 1;
            $name = 'kepala-desa-'.$id.'.'.$img->extension();
        }
        $img->move(public_path('assets/perangkat'),$name);
        $validatedData['photo_url'] = $name;
        KepalaDesa::create($validatedData);
        alert()->success('Berhasil Diubah','Data kepala Desa berhasil di ubah.');
        return back();
    }

    // public function postKepalaDesa(Request $request){
    //     $validatedData = $request->all();
    //     $validator = Validator::make($request->all(),[
    //         "name" => "required",
    //         "photo_url" => "required",
    //     ]);

    //     if($validator->fails()){
    //         alert()->error('Field Kosong','semua field form harus terisi');
    //         return back();
    //     };

    //     $img = $request->file('photo_url');
    //     $id = KepalaDesa::max('id') + 1;
    //     $name = 'kepala-desa-'.$id.'.'.$img->extension();
    //     $img->move(public_path('assets/perangkat'),$name);
    //     $validatedData['photo_url'] = $name;
    //     KepalaDesa::create($validatedData);
    //     alert()->success('Berhasil Diubah','Data kepala Desa berhasil di ubah.');
    //     return back();
    // }

}
