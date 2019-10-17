<?php

use Illuminate\Database\Seeder;

class OrderGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('order_groups')->get()->count() == 0) {
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號1',
                'orderGroupName' => '訂單群組名稱1',
                'eventId' => '1',
                'orderGroupInvoiceLetterhead' => '公司抬頭1',
                'orderGroupInvoiceNumber' => '公司統編1',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號2',
                'orderGroupName' => '訂單群組名稱2',
                'eventId' => '1',
                'orderGroupInvoiceLetterhead' => '公司抬頭2',
                'orderGroupInvoiceNumber' => '公司統編2',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號3',
                'orderGroupName' => '訂單群組名稱3',
                'eventId' => '2',
                'orderGroupInvoiceLetterhead' => '公司抬頭3',
                'orderGroupInvoiceNumber' => '公司統編3',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號4',
                'orderGroupName' => '訂單群組名稱4',
                'eventId' => '2',
                'orderGroupInvoiceLetterhead' => '公司抬頭4',
                'orderGroupInvoiceNumber' => '公司統編4',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號5',
                'orderGroupName' => '訂單群組名稱5',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => '公司抬頭5',
                'orderGroupInvoiceNumber' => '公司統編5',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號6',
                'orderGroupName' => '訂單群組名稱6',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => '公司抬頭6',
                'orderGroupInvoiceNumber' => '公司統編6',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號7',
                'orderGroupName' => '訂單群組名稱7',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '公司抬頭7',
                'orderGroupInvoiceNumber' => '公司統編7',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號8',
                'orderGroupName' => '訂單群組名稱8',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '公司抬頭8',
                'orderGroupInvoiceNumber' => '公司統編8',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號9',
                'orderGroupName' => '訂單群組名稱9',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭9',
                'orderGroupInvoiceNumber' => '公司統編9',
                ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號10',
                'orderGroupName' => '訂單群組名稱10',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭10',
                'orderGroupInvoiceNumber' => '公司統編10',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號11',
                'orderGroupName' => '訂單群組名稱11',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭11',
                'orderGroupInvoiceNumber' => '公司統編11',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號12',
                'orderGroupName' => '訂單群組名稱12',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭12',
                'orderGroupInvoiceNumber' => '公司統編12',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號13',
                'orderGroupName' => '訂單群組名稱13',
                'eventId' => '2',
                'orderGroupInvoiceLetterhead' => '公司抬頭13',
                'orderGroupInvoiceNumber' => '公司統編13',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號14',
                'orderGroupName' => '訂單群組名稱14',
                'eventId' => '2',
                'orderGroupInvoiceLetterhead' => '公司抬頭14',
                'orderGroupInvoiceNumber' => '公司統編14',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號15',
                'orderGroupName' => '訂單群組名稱15',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => '公司抬頭15',
                'orderGroupInvoiceNumber' => '公司統編15',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號16',
                'orderGroupName' => '訂單群組名稱16',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => '公司抬頭16',
                'orderGroupInvoiceNumber' => '公司統編16',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號17',
                'orderGroupName' => '訂單群組名稱17',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '公司抬頭17',
                'orderGroupInvoiceNumber' => '公司統編17',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號18',
                'orderGroupName' => '訂單群組名稱18',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '公司抬頭18',
                'orderGroupInvoiceNumber' => '公司統編18',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號19',
                'orderGroupName' => '訂單群組名稱19',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭19',
                'orderGroupInvoiceNumber' => '公司統編19',
                ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號20',
                'orderGroupName' => '訂單群組名稱20',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭20',
                'orderGroupInvoiceNumber' => '公司統編20',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號21',
                'orderGroupName' => '訂單群組名稱21',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭21',
                'orderGroupInvoiceNumber' => '公司統編21',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號22',
                'orderGroupName' => '訂單群組名稱22',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭22',
                'orderGroupInvoiceNumber' => '公司統編22',
            ]);
        }
    }
}
