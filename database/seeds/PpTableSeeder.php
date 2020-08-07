<?php

use Illuminate\Database\Seeder;

class PpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'age' => 10,
        ];
        DB::table('pp')->insert($param);

        $param = [
            'name' => 'jiro',
            'age' => 20,
        ];
        DB::table('pp')->insert($param);

        $param = [
            'name' => 'saburo',
            'age' => 30,
        ];
        DB::table('pp')->insert($param);
    }
}
