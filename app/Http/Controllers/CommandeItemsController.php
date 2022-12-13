<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeItemsController extends Controller
{
    public function details($id)
    {
        $commande = Commande::find($id);
        return response()->json($commande);
    }
}
