<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;

class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $offres = Offre::all();
        $offres = Offre::orderBy('created_at', 'desc')->paginate(3);*/
        $offres = Offre::latest()->paginate(3);
        return view('offres.index',compact('offres'))
                ->with('i',(request()->input('page', 1) - 1) * 3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offres.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->validate([
            'id_user' =>'required',
            'titre' => 'required',
            'lieu_de_travail' => 'required',
            'secteur' => 'required',
            'description_de_poste' => 'required',
            'nombre_de_poste' => 'required',
            'date_de_publication' => 'required',
            'date_limite' => 'required',
            'profil_recherche' => 'required',
            'type_de_contrat' => 'required',
        ]);
        Offre::create($request->all());
        return redirect()->route('offres.index')
                         ->with('success', 'Votre offre a été crée !');      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offre $offre)
    {
        // $offre = Offre::find($id);
        return view('offres.show',compact('offre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function edit(Offre $offre)
    {   
        // $offre = Offre::find($id);
        return view('offres.edit',compact('offre'));
    }
    */
    public function edit($id)
    {   
        $offre = Offre::find($id);
        return view('offres.edit')->with('offre', $offre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */    
    public function update(Request $request, Offre $offre)
    {
         $request->validate([
            'id_user' =>'required',
            'titre' => 'required',
            'lieu_de_travail' => 'required',
            'secteur' => 'required',
            'description_de_poste' => 'required',
            'nombre_de_poste' => 'required',
            'date_de_publication' => 'required',
            'date_limite' => 'required',
            'profil_recherche' => 'required',
            'type_de_contrat' => 'required',
        ]);
        $offre->update($request->all());
  
        return redirect()->route('offres.index')
                        ->with('success','Offre modifier avec sucées !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offre $offre)
    {
        $offre->delete();
         return redirect()->route('offres.index')
                          ->with('success', 'Offre supprimer avec succées!');
    }
}
