<?php

namespace App\Http\Controllers;

use App\Models\Factureclient;
use App\Models\Client;
use App\Models\Produit;
use Illuminate\Http\Request;

class FacturecController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factureclients=Factureclient::with('client')->get();
        // dd($factureclients);
        return view('factureclients.index' , compact('factureclients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $clients=Client::all();
        return view('factureclients.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Factureclient::create($request->all());
        return redirect()->route('factureclients.index')->with('notice','ajout facture effectué avec succé');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factureclients=Factureclient::find($id);
    return view('factureclients/show', compact('factureclients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factureclients=Factureclient::find($id);
        $clients=Client::all();
        return view('factureclients/edit', compact('clients','factureclients'));
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
        $factureclients=Factureclient::find($id);
        $factureclients->update($request->all());
        return redirect()->route('factureclients.index')->with('notice','la maj factures effectué avec succés');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factureclients=Factureclient::find($id);
        $factureclients->delete();
        return redirect()->route('factureclients.index')->with('notice','la suppression facture effectuée avec succés');

    }
    function fcp($id = 0)
    {
        // dd("ok");
        //$produits=$request->produit_ids();
        //$qtes=$request->qtes();
        $factureclients = Factureclient::find($id);
        $produits = Produit::all();

        return view('factureclients/factureclients_produits', compact('factureclients', 'produits'));
    }
    public function fcs(Request $request, $id)
    {
        $factureclients = Factureclient::find($id);


        $factureclients->produit()->attach($request->produit_id, ['qte' => $request->qte,'prix' => $request->prix]);
        $produits = Produit::all();

        return view('factureclients/factureclients_produits', compact('factureclients', 'produits'));
    }
    public function sups($id)
    {
        // DB::table('commande_produit')->where('id',$id)->delete();

        $factureclient=Factureclient::findOrFail($id);
       $factureclient->produit()->detach();
    
    return redirect()->route('factureclients/index')->with('notice','la suppression de la factureclient effectuée avec succés');

    }
}
