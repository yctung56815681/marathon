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
                'orderNo' => 'P201910191234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '1',
                'memberId' => '1',
                'runId' => '1',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910111234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '2',
                'memberId' => '2',
                'runId' => '2',
            ]);

            DB::table('orders')->insert([
                'orderNo' => 'P201910111234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '2',
                'memberId' => '3',
                'runId' => '3',
            ]);

            DB::table('orders')->insert([
                'orderNo' => 'P201910231234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '3',
                'memberId' => '4',
                'runId' => '4',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910231234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '3',
                'memberId' => '5',
                'runId' => '5',
            ]);

            DB::table('orders')->insert([
                'orderNo' => 'P201910231234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '3',
                'memberId' => '6',
                'runId' => '6',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910241122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '7',
                'runId' => '1',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910241122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '8',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910241122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '9',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910241122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '4',
                'memberId' => '10',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910252345',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '5',
                'memberId' => '11',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910252345',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '5',
                'memberId' => '12',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910252345',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '5',
                'memberId' => '1',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910252345',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '5',
                'memberId' => '14',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910252345',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '5',
                'memberId' => '15',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910221234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '6',
                'memberId' => '16',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910221234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '6',
                'memberId' => '17',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910221234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '6',
                'memberId' => '18',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '7',
                'memberId' => '19',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '7',
                'memberId' => '20',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '7',
                'memberId' => '21',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '7',
                'memberId' => '22',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '7',
                'memberId' => '23',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '7',
                'memberId' => '24',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '7',
                'memberId' => '25',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '7',
                'memberId' => '26',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910211233',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '8',
                'memberId' => '27',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910211233',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '8',
                'memberId' => '28',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910220909',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '9',
                'memberId' => '29',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910220909',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '9',
                'memberId' => '30',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910220909',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '9',
                'memberId' => '31',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '10',
                'memberId' => '32',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '10',
                'memberId' => '33',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '10',
                'memberId' => '34',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '10',
                'memberId' => '35',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091234',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '10',
                'memberId' => '36',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910019090',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '11',
                'memberId' => '34',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910019090',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '11',
                'memberId' => '30',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910019090',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '11',
                'memberId' => '29',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910121122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '12',
                'memberId' => '28',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910121122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '12',
                'memberId' => '27',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910121122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '12',
                'memberId' => '26',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910123456',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '13',
                'memberId' => '25',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910123456',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '13',
                'memberId' => '24',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910123456',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '13',
                'memberId' => '23',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091010',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '14',
                'memberId' => '22',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091010',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '14',
                'memberId' => '21',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910091010',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '14',
                'memberId' => '20',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910081919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '15',
                'memberId' => '19',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910081919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '15',
                'memberId' => '18',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910081919',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '15',
                'memberId' => '17',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201909091212',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '16',
                'memberId' => '16',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201909091212',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '16',
                'memberId' => '15',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201909091212',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '16',
                'memberId' => '14',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201909091212',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '16',
                'memberId' => '13',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910211122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '17',
                'memberId' => '12',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910211122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '17',
                'memberId' => '11',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910211122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '17',
                'memberId' => '10',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910071819',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '18',
                'memberId' => '9',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910071819',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '18',
                'memberId' => '8',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910071819',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '18',
                'memberId' => '7',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910071819',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '18',
                'memberId' => '6',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910071122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '19',
                'memberId' => '5',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910071122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '19',
                'memberId' => '4',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910071122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '19',
                'memberId' => '3',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910071122',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '19',
                'memberId' => '2',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910031221',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '20',
                'memberId' => '1',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910031221',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '20',
                'memberId' => '44',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910031221',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '20',
                'memberId' => '43',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201909081188',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '21',
                'memberId' => '42',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201909081188',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '21',
                'memberId' => '41',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201909081188',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '21',
                'memberId' => '40',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910213456',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '22',
                'memberId' => '39',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910213456',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '22',
                'memberId' => '38',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910213456',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '22',
                'memberId' => '37',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910213456',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '22',
                'memberId' => '36',
                'runId' => '2',
            ]);
            DB::table('orders')->insert([
                'orderNo' => 'P201910213456',
                'orderStatus' => '1',
                'orderRevoke' => '1',
                'orderGroupId' => '22',
                'memberId' => '35',
                'runId' => '2',
            ]);
        }
    }
}