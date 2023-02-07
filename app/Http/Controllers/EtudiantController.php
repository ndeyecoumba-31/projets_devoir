<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiant = etudiant::all();
        return view('etudiants.index', compact('etudiant'));
       
    }
    
    public function create()
    {
        $etudiant = Etudiant::all();
        return view('etudiants.create',compact('etudiant'));
        
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Etudiant::create($input);
        return redirect('etudiants')->with('flash_message', 'etudiant Addedd!');  
    }

    
   
  
   
   
}
