<?php

use Illuminate\Database\Seeder;
use App\Increment;

class IncrementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $roles = ['kayu mentah', 'wood working', 'furniture product', 'furniture & maintenance manufacture',
        //         'design architecture', 'design furniture', 'building construction', 'civil engineering', 'mechanical & electric'];

        // foreach ($roles as $role) {
            App\Increment::create([
                'name' => 'kayu mentah',
                'count' => 0,
                'parents_id' => 1,
                'images' => 'images/childs/woodworking.jpg'
            ]);
            App\Increment::create([
                'name' => 'wood working',
                'count' => 0,
                'parents_id' => 1,
                'images' => 'images/childs/woodworking2.jpg'

            ]);
            App\Increment::create([
                'name' => 'furniture product',
                'count' => 0,
                'parents_id' => 2,
                'images' => 'images/childs/furniture2.jpg'
            ]);
            App\Increment::create([
                'name' => 'furniture & maintenance manufacture',
                'count' => 0,
                'parents_id' => 2,
                'images' => 'images/childs/Furniture1.jpg'

            ]);
            App\Increment::create([
                'name' => 'design architecture',
                'count' => 0,
                'parents_id' => 3,
                'images' => 'images/childs/desain.png'

            ]);
            App\Increment::create([
                'name' => 'design furniture',
                'count' => 0,
                'parents_id' => 3,
                'images' => 'images/childs/Desain-Furniture-Kantor-Kekinian.jpg'
            ]);
            App\Increment::create([
                'name' => 'building construction',
                'count' => 0,
                'parents_id' => 4,
                'images' => 'images/childs/Civilengineering.jpg'

            ]);
            App\Increment::create([
                'name' => 'civil engineering',
                'count' => 0,
                'parents_id' => 4,
                'images' => 'images/childs/Civilengineering.jpg'

            ]);
            App\Increment::create([
                'name' => 'mechanical & electric',
                'count' => 0,
                'parents_id' => 4,
                'images' => 'images/childs/Civilengineering.jpg'

            ]);
        // }
    }
}
