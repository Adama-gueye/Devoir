<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Matiere;
use App\Models\Semestre;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // 
        $matieres=Matiere::all();
        $semestres=Semestre::all();
        return view('etudiants.index',compact('matieres','semestres'));
    }
    public function liste(){
        $etudiants=Etudiant::all();
        return view('classe',compact('etudiants'));
    }
    public function getAverage()
    {
        $etudiants = Etudiant::all();
        $sum = $etudiants->sum(function ($etudiant) {
            return $etudiant->note1 + $etudiant->examen;
        });
        $count = $etudiants->count();
        $average = $sum / $count;

        return view('moyenne', [
            'average' => $average,
        ]);
    }

        public function getFirstInClass()
    {
        $etudiants = Etudiant::all();

        $first = $etudiants->sortByDesc(function ($etudiant) {
            return $etudiant->note1 + $etudiant->examen;
        })->first();

        return view('first', [
            'nom' => $first->nom,
            'prenom' => $first->prenom,
        ]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->matiere = $request->matiere;
        $etudiant->note1 = $request->note1;
        $etudiant->examen = $request->examen;
        $etudiant->semestre = $request->semestre;

        $etudiant->save();

        return redirect()->route('classe')->with('success','Etudiant Enregistrer avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Etudiant $etudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        //
    }
}
