<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['produit_id','photo','libelle','qte','prix_unitaire','categorie_id','fournisseur_id'];
/**
 * Get the categorie that owns the Produit
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function categorie(): BelongsTo
{
    return $this->belongsTo(Categorie::class);
}
/**
 * The commande that belong to the Produit
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function commande(): BelongsToMany
{
    return $this->belongsToMany(Commande::class,'commande_produit');
}

/**
 * The facturefournisseur that belong to the Produit
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function facturefournisseur(): BelongsToMany
{
    return $this->belongsToMany(Facturefournisseur::class);
}
/**
 * The factureclient that belong to the Produit
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function factureclient(): BelongsToMany
{
    return $this->belongsToMany(Factureclient::class);
}
/**
 * Get the fournisseur that owns the Produit
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function fournisseur(): BelongsTo
{
    return $this->belongsTo(Fournisseur::class);
}
}
