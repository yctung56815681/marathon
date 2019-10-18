<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('orders')->get()->count() == 0) {
            DB::table('orders')->insert([
                'orderNo' => '訂單編號1',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '1',
                'memberId' => '1',
                'runId' => '1',
            ]);
            DB::table('orders')->insert([
                'orderNo' => '訂單編號2',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '2',
                'memberId' => '2',
                'runId' => '2',
            ]);

            DB::table('orders')->insert([
                'orderNo' => '訂單編號3',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '2',
                'memberId' => '3',
                'runId' => '3',
            ]);

            DB::table('orders')->insert([
                'orderNo' => '訂單編號4',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '3',
                'memberId' => '4',
                'runId' => '4',
            ]);
            DB::table('orders')->insert([
                'orderNo' => '訂單編號5',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '3',
                'memberId' => '5',
                'runId' => '5',
            ]);

            DB::table('orders')->insert([
                'orderNo' => '訂單編號6',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '3',
                'memberId' => '6',
                'runId' => '6',
            ]);
            DB::table('orders')->insert([
                'orderNo' => '訂單編號7',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '7',
                'runId' => '1',
            ]);
            DB::table('orders')->insert([
                'orderNo' => '訂單編號8',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '8',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => '訂單編號9',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '9',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => '訂單編號10',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '1',
                'runId' => '2',
            ]);
        }
    }
}