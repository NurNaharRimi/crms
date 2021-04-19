<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function categorieFrom(){
        return view('backend.layouts.categorie.categoriefrom');
    }
    public function categorielist(){
        return view('backend.layouts.categorie.categorie');
    }
}
