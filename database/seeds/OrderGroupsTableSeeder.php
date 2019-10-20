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
                'orderGroupNo' => 'P123456789012345',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '資策研究社',
                'eventId' => '1',
                'orderGroupInvoiceLetterhead' => '資策會',
                'orderGroupInvoiceNumber' => '12365448',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P098765432112345',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '中佑大戲院',
                'eventId' => '1',
                'orderGroupInvoiceLetterhead' => '中佑大戲院',
                'orderGroupInvoiceNumber' => '78998875',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P321569874563214',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => 'CY FOOD美食網',
                'eventId' => '2',
                'orderGroupInvoiceLetterhead' => '美食網',
                'orderGroupInvoiceNumber' => '1235455874',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P023654123589654',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '鼎王鍋集團',
                'eventId' => '2',
                'orderGroupInvoiceLetterhead' => '鼎王',
                'orderGroupInvoiceNumber' => '112233554489',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P123654789541236',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '99大賣場',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => '99大公司',
                'orderGroupInvoiceNumber' => '335866525',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P12365478954123',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱6',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => '公司抬頭6',
                'orderGroupInvoiceNumber' => '公司統編6',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號7',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱7',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '公司抬頭7',
                'orderGroupInvoiceNumber' => '公司統編7',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號8',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱8',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '公司抬頭8',
                'orderGroupInvoiceNumber' => '公司統編8',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號9',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱9',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭9',
                'orderGroupInvoiceNumber' => '公司統編9',
                ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號10',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱10',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭10',
                'orderGroupInvoiceNumber' => '公司統編10',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號11',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱11',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭11',
                'orderGroupInvoiceNumber' => '公司統編11',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號12',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱12',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭12',
                'orderGroupInvoiceNumber' => '公司統編12',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號13',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱13',
                'eventId' => '2',
                'orderGroupInvoiceLetterhead' => '公司抬頭13',
                'orderGroupInvoiceNumber' => '公司統編13',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號14',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱14',
                'eventId' => '2',
                'orderGroupInvoiceLetterhead' => '公司抬頭14',
                'orderGroupInvoiceNumber' => '公司統編14',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號15',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱15',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => '公司抬頭15',
                'orderGroupInvoiceNumber' => '公司統編15',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號16',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱16',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => '公司抬頭16',
                'orderGroupInvoiceNumber' => '公司統編16',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號17',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱17',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '公司抬頭17',
                'orderGroupInvoiceNumber' => '公司統編17',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號18',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱18',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '公司抬頭18',
                'orderGroupInvoiceNumber' => '公司統編18',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號19',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱19',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭19',
                'orderGroupInvoiceNumber' => '公司統編19',
                ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號20',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱20',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭20',
                'orderGroupInvoiceNumber' => '公司統編20',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號21',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱21',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭21',
                'orderGroupInvoiceNumber' => '公司統編21',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => '訂單群組編號22',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '訂單群組名稱22',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '公司抬頭22',
                'orderGroupInvoiceNumber' => '公司統編22',
            ]);
        }
    }
}
