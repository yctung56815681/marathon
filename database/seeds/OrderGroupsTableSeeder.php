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
                'orderGroupInvoiceLetterhead' => 'CY FOOD 美食網',
                'orderGroupInvoiceNumber' => '1235455874',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P023654123589654',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => 'APP STORE商店部',
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
                'orderGroupName' => '陳林美月家族',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => '陳林美月',
                'orderGroupInvoiceNumber' => '',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P234321234567890',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '馬自達南區銷售部',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '馬自達台灣分公司',
                'orderGroupInvoiceNumber' => '344522334',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P123443209873845',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '麗明營造',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '麗明營造股份有限公司',
                'orderGroupInvoiceNumber' => '98493093',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P345678909876543',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '中興電工',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '中興電工事業股份有限公司',
                'orderGroupInvoiceNumber' => '443988',
                ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P763876787635425',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '大山診所',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '大山診所',
                'orderGroupInvoiceNumber' => '3949494',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P839383938393839',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '東海音樂研究社',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '東海大學音樂社',
                'orderGroupInvoiceNumber' => '',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P778839876787636',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '逢甲租書坊',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '王立人',
                'orderGroupInvoiceNumber' => '9893893',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P120987837876546',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '林新路跑社',
                'eventId' => '2',
                'orderGroupInvoiceLetterhead' => '財團法人林新醫院',
                'orderGroupInvoiceNumber' => '8838738',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P989387485743789',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '鄉鄰國際',
                'eventId' => '2',
                'orderGroupInvoiceLetterhead' => '鄉鄰股份事業有限公司',
                'orderGroupInvoiceNumber' => '983984983',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P984989484939838',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => 'CT圖書社',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => 'CT圖書文化管理事業有限公司',
                'orderGroupInvoiceNumber' => '4535355',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P454678948765432',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '相信事業有限公司',
                'eventId' => '3',
                'orderGroupInvoiceLetterhead' => '相信事業股份有限公司',
                'orderGroupInvoiceNumber' => '98738789',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P098889876378476',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '王明月',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '王明月',
                'orderGroupInvoiceNumber' => '',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P989098765456789',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '順風快遞事業部',
                'eventId' => '4',
                'orderGroupInvoiceLetterhead' => '順風股份有限公司',
                'orderGroupInvoiceNumber' => '98493849',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P876736545678987',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '財團法人義興基金會',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '張義興',
                'orderGroupInvoiceNumber' => '89484893',
                ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P983908765637845',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '吳何太',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '吳何太',
                'orderGroupInvoiceNumber' => '',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P098489873876478',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '鄉親便當店',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '鄉親便當店',
                'orderGroupInvoiceNumber' => '98394848',
            ]);
            DB::table('order_groups')->insert([
                'orderGroupNo' => 'P989487637846534',
                'orderGroupStatus' => '1',
                'orderGroupRevoke' => '1',
                'orderGroupName' => '巨大機械台中銷售部',
                'eventId' => '5',
                'orderGroupInvoiceLetterhead' => '巨大事業',
                'orderGroupInvoiceNumber' => '90393009',
            ]);
        }
    }
}
