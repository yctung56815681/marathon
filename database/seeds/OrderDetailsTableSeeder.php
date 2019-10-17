<?php

use Illuminate\Database\Seeder;

class OrderDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('order_details')->get()->count() == 0) {
            DB::table('order_details')->insert([
                'orderId' => '1',
                'productId' => '1',
            ]);
            DB::table('order_details')->insert([
                'orderId' => '2',
                'productId' => '1',
            ]);

            DB::table('order_details')->insert([
                'orderId' => '2',
                'productId' => '2',
            ]);
            DB::table('order_details')->insert([
                'orderId' => '3',
                'productId' => '1',
            ]);

            DB::table('order_details')->insert([
                'orderId' => '3',
                'productId' => '2',
            ]);
            DB::table('order_details')->insert([
                'orderId' => '3',
                'productId' => '3',
            ]);

            DB::table('order_details')->insert([
                'orderId' => '4',
                'productId' => '1',
            ]);
            DB::table('order_details')->insert([
                'orderId' => '4',
                'productId' => '2',
            ]);

            DB::table('order_details')->insert([
                'orderId' => '4',
                'productId' => '3',
            ]);
            DB::table('order_details')->insert([
                'orderId' => '4',
                'productId' => '4',
            ]);

            DB::table('order_details')->insert([
                'orderId' => '5',
                'productId' => '1',
            ]);
            DB::table('order_details')->insert([
                'orderId' => '5',
                'productId' => '2',
            ]);

            DB::table('order_details')->insert([
                'orderId' => '5',
                'productId' => '3',
            ]);
            DB::table('order_details')->insert([
                'orderId' => '5',
                'productId' => '4',
            ]);

            DB::table('order_details')->insert([
                'orderId' => '5',
                'productId' => '1',
            ]);
        }
    }
}
