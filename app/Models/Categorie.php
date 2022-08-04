<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected  $fillable=['nomcategorie'];
    use HasFactory;
    /**
     * Get all of the produit for the Categorie
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produit(): HasMany
    {
        return $this->hasMany(Produit::class);
    }
}
 