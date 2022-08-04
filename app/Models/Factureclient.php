<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factureclient extends Model
{
    use HasFactory;
    protected $fillable=['facture_id','date','qte','prix','client_id'];
    /**
     * Get the client that owns the Factureclient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }


    /**
     * The produit that belong to the Factureclient
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function produit(): BelongsToMany
    {
        return $this->belongsToMany(Produit::class);
    }
}
