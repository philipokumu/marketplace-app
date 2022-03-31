<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Listing extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => [
                'type' => 'listings',
                'listing_id' => $this->id,
                'attributes' => [
                    'title' => $this->title,
                    'slug' => $this->slug,
                    'price' => $this->price,
                    'currency' => $this->currency,
                    'category_id' => $this->category_id,
                    'description' => $this->description,
                    'date_online' => $this->date_online,
                    'date_offline' => $this->date_offline
                ],
            ],
        ];
    }
}
