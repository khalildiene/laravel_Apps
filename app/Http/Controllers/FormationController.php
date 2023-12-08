<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        $liste= Formation::all();
        return view('liste_formation',['liste'=>$liste]);
    }
}
