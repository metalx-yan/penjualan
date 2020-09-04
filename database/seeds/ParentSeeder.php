<?php

use Illuminate\Database\Seeder;

class ParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [ 'wood working', 'furniture', 'design architecture and furniture', 'construct working'];

        foreach ($roles as $role) {
            App\Parents::create([
                'name' => $role
            ]);
        }
    }
}
