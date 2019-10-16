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
                'productNo' => '產品編號1',
                'productName' => '產品名稱1',
                'productPrice' => '1000',
            ]);
            DB::table('products')->insert([
                'productNo' => '產品編號2',
                'productName' => '產品名稱2',
                'productPrice' => '2000',
            ]);
            DB::table('products')->insert([
                'productNo' => '產品編號3',
                'productName' => '產品名稱3',
                'productPrice' => '3000',
            ]);
            DB::table('products')->insert([
                'productNo' => '產品編號4',
                'productName' => '產品名稱4',
                'productPrice' => '4000',
            ]);
        }
    }
}