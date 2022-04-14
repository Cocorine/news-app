<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }


    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterMaking(function (Article $article) {
            //
        })->afterCreating(function (Article $article) {
            //
        });
    }

    public function factories()
    {
    
        // Create three App\Models\User instances...
        $articles = Article::factory()->count(20)->create();
    
    }
}
