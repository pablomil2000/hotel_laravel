<?php

namespace Database\Seeders;

use App\Models\RoomsCategory;
use Illuminate\Database\Seeder;

class RoomsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomsCategory::create(['tipo'=>'Doble','imagen' => 'img/room/room-b1.jpg','tamano' => 8,'precio'=>49,'capacidad'=>2,'tipo_cama'=>'King Size']);
        RoomsCategory::create(['tipo'=>'Premium','imagen' => 'img/room/room-b2.jpg','tamano' => 12,'precio'=>99,'capacidad'=>2,'tipo_cama'=>'King Size']);
        RoomsCategory::create(['tipo'=>'Deluxe','imagen' => 'img/room/room-b3.jpg','tamano' => 18,'precio'=>149,'capacidad'=>2,'tipo_cama'=>'King Size']);
        RoomsCategory::create(['tipo'=>'Familiar','imagen' => 'img/room/room-b4.jpg','tamano' => 25,'precio'=>199,'capacidad'=>5,'tipo_cama'=>'King Size']);
    }
}
