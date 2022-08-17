<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits=Produit::with('fournisseur')->get();
        return view('produits.index' , compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::all();
        $fournisseurs=Fournisseur::all();
        return view('produits.create', compact('categories','fournisseurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit=new Produit;
        $produit->libelle = $request->libelle;
        $produit->qte = $request->qte;
        $produit->prix_unitaire = $request->prix_unitaire;
        $produit->categorie_id = $request->categorie_id;
        $produit->fournisseur_id = $request->fournisseur_id;
        $file = $request->file('photo');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('images/',$filename);   
        $produit->photo=$filename;
        $produit->save();
        return redirect()->route('produits.index')->with('notice','ajout produit effectué avec succé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produits=Produit::find($id);
    return view('produits/show', compact('produits'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produits=Produit::find($id);
        return view('produits/edit', compact('produits'));
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
        $produits=Produit::find($id);
        $produits->update($request->all());
        return redirect()->route('produits.index')->with('notice','la maj produits effectué avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produits=Produit::find($id);
        $produits->delete();
        return redirect()->route('produits.index')->with('notice','la suppression produit effectuée avec succés');

    }
}
