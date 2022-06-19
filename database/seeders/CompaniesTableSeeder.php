<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'property_id' => 1,
            'name' => 'hoge',
            'tel' => '08048681224',
            'email' => 'hoge@gmail.com',
            'representative' => 'hoge',
        ];
        DB::table('companies')->insert($param);

        $param = [
            'user_id' => 1,
            'property_id' => 2,
            'name' => 'hoge',
            'tel' => '08048681224',
            'email' => 'hoge@gmai.com',
            'representative' => 'hoge',
        ];
        DB::table('companies')->insert($param);

        $param = [
            'user_id' => 1,
            'property_id' => 3,
            'name' => 'hoge',
            'tel' => '08048681224',
            'email' => 'hoge@gmai.com',
            'representative' => 'hoge',
        ];
        DB::table('companies')->insert($param);

        $param = [
            'user_id' => 1,
            'property_id' => 4,
            'name' => 'hoge',
            'tel' => '08048681224',
            'email' => 'hoge@gmai.com',
            'representative' => 'hoge',
        ];
        DB::table('companies')->insert($param);
    }
}
