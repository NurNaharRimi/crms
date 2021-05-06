<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function categorieFrom(){
        return view('backend.layouts.categorie.categoriefrom');
    }
    public function categorielist(){
        $categorielist = Categorie::all();
        $title = "Categorie List";
        return view('backend.layouts.categorie.categorielist',compact('categorielist','title'));
    }

    public function categoriecreate(Request $request){
        Categorie::create([
            'Car_Name'=> $request->Car_name,

        ]);

        return redirect()->back();






    }


}
