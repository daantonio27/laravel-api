<?php

namespace App\Http\Resources\Produit;

use Illuminate\Http\Resources\Json\JsonResource;

class ProduitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'nom' => $this->nom,
            'details' => $this->details,
            'prix' => $this->prix,
            'stock' => $this->stock == 0 ? 'En rupture de stock' : $this->stock,
            'href' => [
                'commande' => route('commande.index',$this->id)
            ]
        ];
    }
}
