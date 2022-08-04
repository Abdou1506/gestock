<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturefournisseur extends Model
{
    use HasFactory;
    protected $fillable=['facture_id','date','qte','prix','fournisseur_id'];
    /**
     * Get the fournisseur that owns the Facturefournisseur
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fournisseur(): BelongsTo
    {
        return $this->belongsTo(Fournisseur::class);

       
        
    }
     /**
         * The produit that belong to the Facturefournisseur
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        public function produit(): BelongsToMany
        {
            return $this->belongsToMany(Produit::class);
        }


}
