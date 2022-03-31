<?php

namespace Tests\Feature;

use App\Http\Livewire\AllListings;
use App\Http\Livewire\CreateListing;
use App\Models\Category;
use App\Models\Listing;
use Livewire\Livewire;
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
                        'date_online' => $listing->date_online,
                        'date_offline' => optional($listing->date_offline),
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

    public function test_user_can_search_by_listing_title()
    {
        $search_term = 'stools';
        $category = Category::factory()->create();
        Listing::factory()->create(['category_id'=>$category->id,'title'=>$search_term]);
        Listing::factory()->create(['category_id'=>$category->id]);

        $response = $this->get("/api/listings?listing_title={$search_term}");

        $response->assertStatus(200)
            ->assertJsonCount(1,'data')
            ->assertSeeText($search_term, $escaped = true);
    }

    public function test_user_can_search_by_listing_category()
    {
        $category1 = Category::factory()->create();
        $category2 = Category::factory()->create();
        Listing::factory()->create(['category_id'=>$category1->id]);
        Listing::factory()->create(['category_id'=>$category2->id]);

        $response = $this->get("/api/listings?category_id={$category1->id}");

        $response->assertStatus(200)
            ->assertJsonCount(1,'data');
    }


    // Admin
    public function test_admin_can_add_a_new_listing()
    {
        $this->withoutExceptionHandling();

        $title = 'Chair';
        $price = 50.00;
        $currency = 'KES';
        $description = 'A sturdy piece of furniture';
        $category = Category::factory()->create();

        Livewire::test(CreateListing::class)
            ->set('title', $title)
            ->set('price', $price)
            ->set('currency', $currency)
            ->set('description', $description)
            ->set('category_id', $category->id)
            ->call('create')
            ->assertstatus(200);

    }

    public function test_admin_can_view_all_listings()
    {
        $category = Category::factory()->create();
        $listings = Listing::factory(2)->create(['category_id'=>$category->id]);

        Livewire::test(AllListings::class)
            ->assertStatus(200);
    }
}
