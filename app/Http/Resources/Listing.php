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
                    'mobile' => $this->mobile,
                    'email' => $this->email,
                    'image' => array_rand(array_flip([
                        'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/josie-upholstered-low-profile-pl-1627489111.jpeg',
                        'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/briget-side-table-1582143245.jpg',
                        'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-online-furniture-stores-serena-lily-riviera-barstools-ww-0262-crop-base-1636494299.jpg',
                        'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/rivet-emerly-media-console-1610578756.jpg',
                        'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/drew-barrymore-flower-home-petal-chair-1594829759.jpeg'
                    ]), 1),
                    'date_online' => $this->date_online,
                    'date_offline' => $this->date_offline
                ],
            ],
        ];
    }
}
