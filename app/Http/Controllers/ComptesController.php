<?php

namespace App\Http\Controllers;
use App\Models\Comptes;
use Illuminate\Http\Request;

class ComptesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comptes = Comptes::all();
        return view('comptes.index', compact('comptes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('comptes.create');
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
            'cne'=>'required',
            'nom'=>'required',
            'email'=>'required'
            ]);
            $comptes = new Comptes([
            'cne' => $request->get('cne'),
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'adresse' => $request->get('adresse'),
            'ville' => $request->get('ville'),
            'email' => $request->get('email'),
           ]);
            $comptes->save();
            return redirect('/comptes')->with('success', 'Compte saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comptes= Comptes::find($id);
        return view('comptes.edit', compact('comptes') ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $request->validate([
            'cne'=>'required',
            'nom'=>'required',
            'email'=>'required'
            ]);
            $contact = Comptes::find($id);
 $contact->nom = $request->get('nom');
 $contact->prenom = $request->get('prenom');
 $contact->email = $request->get('email');
 $contact->adresse= $request->get('adresse');
 $contact->ville = $request->get('ville');
 $contact->cne= $request->get('cne');
   $contact->save();
            return redirect('/comptes')->with('success', 'Compte saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Comptes::find($id);
        $contact->delete();
        return redirect('/comptes')->with('success', 'Compte deleted!');
    }
}
