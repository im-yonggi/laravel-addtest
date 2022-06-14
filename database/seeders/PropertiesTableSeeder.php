<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Property;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'property' => 'lead',
        ];
        DB::table('properties')->insert($param);

        $param = [
            'property' => 'mail',
        ];
        DB::table('properties')->insert($param);

        $param = [
            'property' => 'appointed',
        ];
        DB::table('properties')->insert($param);

        $param = [
            'property' => 'negotiated',
        ];
        DB::table('properties')->insert($param);

        $param = [
            'property' => 'created',
        ];
        DB::table('properties')->insert($param);
    }
}
