<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable=['commande_id','date','adresse','etat','client_id'];
    /**
     * Get the fournisseur that owns the Commande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fournisseur(): BelongsTo
    {
        return $this->belongsTo(Fournisseur::class);
    }


    /**
     * The produit that belong to the Commande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function produit(): BelongsToMany
    {
        return $this->belongsToMany(Produit::class,'commande_produit')->withPivot('qtecommande');

    }
    /**
     * Get the client that owns the Commande
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
