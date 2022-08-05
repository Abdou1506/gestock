<?php

namespace App\Http\Controllers;

use App\Models\Facturefournisseur;
use App\Models\Fournisseur;

use Illuminate\Http\Request;

class FacturefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturefournisseurs=Facturefournisseur::with('fournisseur')->get();
        return view('facturefournisseurs.index' , compact('facturefournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $fournisseurs=Fournisseur::all();
        return view('facturefournisseurs.create', compact('fournisseurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    Facturefournisseur::create($request->all());
       
        return redirect()->route('facturefournisseurs.index')->with('notice','ajout facture effectué avec succé');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facturefournisseurs=Facturefournisseur::find($id);
    return view('facturefournisseurs/show', compact('facturefournisseurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facturefournisseurs=Facturefournisseur::find($id);
        $fournisseurs=Fournisseur::all();
        return view('facturefournisseurs/edit', compact('facturefournisseurs','fournisseurs'));
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
        $facturefournisseurs=Facturefournisseur::find($id);
        $facturefournisseurs->update($request->all());
        return redirect()->route('facturefournisseurs.index')->with('notice','la maj facturefournisseurs effectué avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $facturefournisseurs=Facturefournisseur::find($id);
        $facturefournisseurs->delete();
        return redirect()->route('facturefournisseurs.index')->with('notice','la suppression facture effectuée avec succés');

    }
}
