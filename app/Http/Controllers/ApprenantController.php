<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    public function index(){
        $liste = Apprenant::all();
        return view('liste_apprenant',['liste'=>$liste]);
    }
}
