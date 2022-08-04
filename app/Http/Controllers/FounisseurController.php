<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FounisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs=Fournisseur::all();
        return view('fournisseurs.index' , compact('fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fournisseurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "nom"=>'required|min:2|unique:fournisseurs'
        // ]);
        Fournisseur::create($request->all());
        return redirect()->route('fournisseurs.index')->with('notice','ajout fournisseur effectué avec succé');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fournisseurs=Fournisseur::find($id);
    return view('fournisseurs/show', compact('fournisseurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fournisseurs=Fournisseur::find($id);
        return view('fournisseurs/edit', compact('fournisseurs'));
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
        $fournisseurs=Fournisseur::find($id);
        $fournisseurs->update($request->all());
        return redirect()->route('fournisseurs.index')->with('notice','la maj fournisseurs effectué avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fournisseurs=Fournisseur::find($id);
        $fournisseurs->delete();
        return redirect()->route('fournisseurs.index')->with('notice','la suppression fournisseur effectuée avec succés');

    }
}
