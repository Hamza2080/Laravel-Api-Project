<?php

namespace App\Http\Resources\Review;
use App\Http\Resources\Review\ReviewResource;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'customer' => $this->customer,
            'review'=> $this->review,
            'star'=> 3
        ];
    }
}
