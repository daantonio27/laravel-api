<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    public function produit()
    {
        return $this->hasMany(Produit::class);
    }

    public function commandes()
    {
        return $this->hasOne(Client::class);
    }
}
