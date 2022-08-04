<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=['nom','adresse','tel','email','pays','commande_id'];
    /**
     * Get all of the factureclient for the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factureclient(): HasMany
    {
        return $this->hasMany(Factureclient::class);
    }
}
