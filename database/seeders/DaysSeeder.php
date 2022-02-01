<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'Понедельник'
            ],
            [
                'id' => 2,
                'name' => 'Вторник'
            ],
            [
                'id' => 3,
                'name' => 'Среда'
            ],
            [
                'id' => 4,
                'name' => 'Четверг'
            ],
            [
                'id' => 5,
                'name' => 'Пятница'
            ],
            [
                'id' => 6,
                'name' => 'Суббота'
            ]
        ]);
    }
}
