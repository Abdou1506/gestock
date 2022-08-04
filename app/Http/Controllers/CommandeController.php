<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use App\Models\Client;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes=Commande::with(['produit','client'])->get();
        // dd($commandes);
        return view('commandes.index' , compact('commandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produits=Produit::all();
        $clients=Client::all();
        return view('commandes.create', compact('produits','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commande=Commande::create($request->all());
       
        $commande->produit()->attach($request->produit_id);
        $commande->produit()->attach($request->qtecommande);
        $commande->produit()->attach($request->prix);
        return redirect()->route('commandes.index')->with('notice','ajout commande effectué avec succé');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commandes=Commande::find($id);
    return view('commandes/show', compact('commandes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $commandes=Commande::find($id);
        $clients=Client::all();
        $produits=Produit::all();
        return view('commandes/edit', compact('commandes','clients','produits'));
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
        $commandes=Commande::find($id);
        $commandes->update($request->all());
        return redirect()->route('commandes.index')->with('notice','la maj commandes effectué avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $commandes=Commande::find($id);
        $commandes->delete();
        return redirect()->route('commandes.index')->with('notice','la suppression de la commande effectuée avec succés');

    }
}
