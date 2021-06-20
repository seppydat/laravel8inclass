<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articals;

class ArticalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 350; $i++) {
            $aticals = new Articals();
            $aticals->title = "Bai viet so ".$i;
            $aticals->contents = "Noi dung bai viet ".$i;

            $aticals->save();
        }
    }
}
