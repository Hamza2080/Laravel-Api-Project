<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'stock' => $this->stock == 0 ? 'Not avilable in stock yet' : $this->stock,
            'description' => $this->detail,
            'price' => $this->price,
            'discount' => $this->discount,
            'totalPrice' =>  ($this->price - ($this->discount/100)* $this->price),
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(), 2) : 'No Ratting Yet',
            'href' => [
                'reviews' => route('reviews.index' , $this->id)
            ]
        ];
    }
}
