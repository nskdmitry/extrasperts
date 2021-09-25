<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtrasexerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extrasexers')->insert([
           'name' => "шаман Кулобильды-огай"
        ]);
        DB::table('extrasexers')->insert([
            'name' => "ведьма Селектия"
        ]);
        DB::table('extrasexers')->insert([
            'name' => "старей Атрофимий"
        ]);
        DB::table('extrasexers')->insert([
            'name' => "экстрасенс Кузьма Портков"
        ]);
        DB::table('extrasexers')->insert([
            'name' => "ясновидящая Василиса Василевна Патрикеева II"
        ]);
    }
}
