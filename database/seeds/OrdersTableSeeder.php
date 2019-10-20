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
                'orderNo' => 'P123456789012345',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '1',
                'memberId' => '1',
                'runId' => '1',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P098765432112345',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '2',
                'memberId' => '2',
                'runId' => '2',
            ]);

            DB::table('orders')->insert([
                'orderNo' => 'P098765432112345',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '2',
                'memberId' => '3',
                'runId' => '3',
            ]);

            DB::table('orders')->insert([
                'orderNo' => 'P321569874563214',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '3',
                'memberId' => '4',
                'runId' => '4',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P321569874563214',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '3',
                'memberId' => '5',
                'runId' => '5',
            ]);

            DB::table('orders')->insert([
                'orderNo' => 'P321569874563214',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '3',
                'memberId' => '6',
                'runId' => '6',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P023654123589654',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '7',
                'runId' => '1',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P023654123589654',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '8',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P023654123589654',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '9',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P023654123589654',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '1',
                'runId' => '2',
            ]);
        }
    }
}