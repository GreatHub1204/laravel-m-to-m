<?php

use Illuminate\Database\Seeder;
use App\Season;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Season::create([
            'name' => 'International 2017',
            'description' => 'The regular international season in 2017',
            'year' => 2017,
        ]);

        Season::create([
            'name' => 'International 2018',
            'description' => 'The regular international season in 2018',
            'year' => 2018,
        ]);

        Season::create([
            'name' => 'International 2019',
            'description' => 'The regular international season in 2019',
            'year' => 2019,
        ]);
    }
}
