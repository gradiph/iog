<?php

use App\WelcomeSlider;
use Illuminate\Database\Seeder;

class WelcomeSlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WelcomeSlider::create([
			'image' => 'Slider20170707070707.jpg',
			'caption_title' => 'Sample Slide #1',
			'caption_description' => 'First Sample Slide',
		]);
        WelcomeSlider::create([
			'image' => 'Slider20170707070708.jpg',
			'caption_title' => 'Sample Slide #2',
			'caption_description' => 'Second Sample Slide',
		]);
    }
}
