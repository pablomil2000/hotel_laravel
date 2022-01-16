<?php

namespace Database\Seeders;

use App\Models\slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        slider::create(['image'=>'img/hero/hero-1.jpg']);
        slider::create(['image'=>'img/hero/hero-2.jpg']);
        slider::create(['image'=>'img/hero/hero-3.jpg']);
    }
}