<?php

use Illuminate\Database\Seeder;
use App\Adoption;

class AdoptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Adoption::class, 50)->create();
    }
}
