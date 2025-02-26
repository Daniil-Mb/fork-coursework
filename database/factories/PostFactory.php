<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data = [
            'https://i.gifer.com/Rg9m.gif',
            'https://media.tenor.com/-naibyCBwA8AAAAM/tony-stark-iron-man.gif',
            'https://i.pinimg.com/originals/c9/05/1e/c9051e1cfbb98c813823ba4a29d6fc64.gif',
            'https://media.tenor.com/KzkjlE6ycDsAAAAM/kyson-iron.gif',
            'https://i.gifer.com/FPhh.gif',
            'https://steamuserimages-a.akamaihd.net/ugc/773976809192214958/35FB8E4269DCCFE554F9EBCC42A4F44F51791B11/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false',
            'https://comicvine.gamespot.com/a/uploads/original/11140/111403694/7623687-7476845086-be17d.gif',
            'https://64.media.tumblr.com/3e6b306c8b9b0de7d14d8cdb82d1d0e6/2f8682ca48b52c94-ce/s540x810/5359923f77d3860136edfece5dfaa9133e0b0f2f.gif',

        ];
        return [
            'title' => $this->faker->title(20),
            'content' => $this->faker->text,
            'main_image' => $data[array_rand($data, 1)],
            'preview_image' => $data[array_rand($data, 1)],
            'category_id' => Category::get()->random()->id
        ];
    }
}
