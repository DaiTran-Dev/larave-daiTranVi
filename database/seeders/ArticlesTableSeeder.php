<?php

namespace Database\Seeders;

use App\Models\Articel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articel::truncate();
        for ($i = 0; $i < 50; $i++) {
            Articel::create([
                'title' => Str::random(10),
                'body' => Str::random(200)
            ]);
        }
    }
}
