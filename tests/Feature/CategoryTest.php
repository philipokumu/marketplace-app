<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_a_category()
    {
        $category = Category::factory()->create();

        $response = $this->get('/api/categories/'.$category->id);

        $this->assertNotNull($category->title);
        $this->assertNotNull($category->slug);

        $response->assertStatus(200)
        ->assertJson([
            'data'=>[
                'type'=>'categories',
                'category_id'=>$category->id,
                'attributes'=>[
                    'title' => $category->title,
                    'slug' => $category->slug
                    ],
            ],
        ]);
    }

    public function test_user_can_view_categories()
    {
        $categories = Category::factory(2)->create();

        $response = $this->get('/api/categories');

        $response->assertStatus(200)
        ->assertJson([
            'data' => [
                [
                    'data'=> [
                        'type' => 'categories',
                        'category_id' => $categories->first()->id,
                        'attributes' => [
                            'title' => $categories->first()->title,
                        ]
                    ]
                ],
                [
                    'data'=> [
                        'type' => 'categories',
                        'category_id' => $categories->last()->id,
                        'attributes' => [
                            'title' => $categories->last()->title,
                        ]
                    ]
                ]
            ]
        ]);
    }
}
