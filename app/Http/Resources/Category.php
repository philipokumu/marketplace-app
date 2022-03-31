<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
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
                'type' => 'categories',
                'category_id' => $this->id,
                'attributes' => [
                    'name' => $this->name,
                    'slug' => $this->slug,
                    // 'productDetails' => new ProductCollection($this->products),
                ],
            ],
        ];
    }
}
