<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Listing;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListingTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_a_listing()
    {
        $category = Category::factory()->create();
        $listing = Listing::factory()->create(['category_id'=>$category->id]);

        $response = $this->get('api/listings/'.$listing->id);

        $this->assertNotNull($listing->title);
        $this->assertNotNull($listing->slug);
        $this->assertNotNull($listing->price);
        $this->assertNotNull($listing->currency);
        $this->assertNotNull($listing->category_id);
        $this->assertNotNull($listing->description);
        $this->assertNotNull($listing->slug);
        $this->assertNotNull($listing->date_online);

        $response->assertStatus(200)
        ->assertJson([
            'data'=>[
                'type'=>'listings',
                'listing_id'=>$listing->id,
                'attributes'=>[
                    'title' => $listing->title,
                    'slug' => $listing->slug,
                    'price' => $listing->price,
                    'currency' => $listing->currency,
                    'category_id' => $listing->category_id,
                    'description' => $listing->description,
                    'date_online' => $listing->date_online->toDateTimeString(),
                    'date_offline' => optional($listing->date_offline)->toDateTimeString(),
                    ],
            ],
        ]);
    }

    public function test_user_can_view_listings()
    {
        $category = Category::factory()->create();
        $listings = Listing::factory(2)->create(['category_id'=>$category->id]);

        $response = $this->get('/api/listings');

        $response->assertStatus(200)
        ->assertJson([
            'data' => [
                [
                    'data'=> [
                        'type' => 'listings',
                        'listing_id' => $listings->last()->id,
                        'attributes' => [
                            'title' => $listings->last()->title
                        ]
                    ]
                ],
                [
                    'data'=> [
                        'type' => 'listings',
                        'listing_id' => $listings->first()->id,
                        'attributes' => [
                            'title' => $listings->first()->title
                        ]
                    ]
                ]
            ]
        ]);
    }
}
