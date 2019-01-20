<?php

use Illuminate\Database\Seeder;
use App\Clan;

class ClansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clan::create([
            'name' => 'Liquid',
            'slogan' => 'Never lose'
        ]);

        Clan::create([
            'name' => 'Hacker',
            'slogan' => 'Underground anonymous'
        ]);

        Clan::create([
            'name' => 'Engineer',
            'slogan' => 'Coding never fails'
        ]);
    }
}
