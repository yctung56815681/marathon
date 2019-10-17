<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('products')->get()->count() == 0) {
            DB::table('products')->insert([
                'productNo' => 'shoes01',
                'productName' => '國旗競速路跑鞋-自由藍',
                'productPrice' => '1580',
            ]);
            DB::table('products')->insert([
                'productNo' => 'shoes02',
                'productName' => '國旗競速路跑鞋-雷電金',
                'productPrice' => '1580',
            ]);
            DB::table('products')->insert([
                'productNo' => 'clothes01',
                'productName' => '炫彩雲豹排汗衫',
                'productPrice' => '590',
            ]);
            DB::table('products')->insert([
                'productNo' => 'clothes02',
                'productName' => '男款排汗短袖紀念衣',
                'productPrice' => '390',
            ]);
        }
    }
}