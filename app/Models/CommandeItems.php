<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeItems extends Model
{
    use HasFactory;

    public function produit()
    {
        return $this->hasOne('Produit', 'id');
    }
}
