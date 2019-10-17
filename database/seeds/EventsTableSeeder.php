<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('events')->get()->count() == 0) {

            DB::table('events')->insert([
                'cityId' => '2',
                'eventSignupStartTime' => '2019-11-05 09:00:00',
                'eventSignupEndTime' => '2019-11-20 07:00:00',
                'eventRunStartTime' => '2019-12-02 09:00:00',
                'eventRunEndTime' => '2019-12-05 07:00:00',
                'eventTittle' => '新北場',
                'eventImage' => 'TPH201912.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '新北市浮洲橋下',
            ]);

            DB::table('events')->insert([
                'cityId' => '4',
                'eventSignupStartTime' => '2019-11-03 09:00:00',
                'eventSignupEndTime' => '2019-11-18 07:00:00',
                'eventRunStartTime' => '2019-12-01 09:00:00',
                'eventRunEndTime' => '2019-12-03 07:00:00',
                'eventTittle' => '桃園場',
                'eventImage' => 'TYC201912.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '桃園永安漁港',
            ]);

            DB::table('events')->insert([
                'cityId' => '7',
                'eventSignupStartTime' => '2019-11-02 09:00:00',
                'eventSignupEndTime' => '2019-11-17 07:00:00',
                'eventRunStartTime' => '2019-12-01 09:00:00',
                'eventRunEndTime' => '2019-12-03 07:00:00',
                'eventTittle' => '台中場',
                'eventImage' => 'TXG201912.jpg',
                'eventTel' => '0800-555-666',
                'eventAddr' => '台中市太平區運動場',
            ]);

            DB::table('events')->insert([
                'cityId' => '8',
                'eventSignupStartTime' => '2019-11-06 09:00:00',
                'eventSignupEndTime' => '2019-11-21 07:00:00',
                'eventRunStartTime' => '2019-12-01 09:00:00',
                'eventRunEndTime' => '2019-12-03 07:00:00',
                'eventTittle' => '彰化場',
                'eventImage' => 'CWH202002.jpg',
                'eventTel' => '0800-271-637',
                'eventAddr' => '鹿港鎮運動場',
            ]);

            DB::table('events')->insert([
                'cityId' => '10',
                'eventSignupStartTime' => '2019-11-03 09:00:00',
                'eventSignupEndTime' => '2019-11-18 07:00:00',
                'eventRunStartTime' => '2019-12-01 09:00:00',
                'eventRunEndTime' => '2019-12-03 07:00:00',
                'eventTittle' => '雲林場',
                'eventImage' => 'YUN201909.jpg',
                'eventTel' => '0800-777-888',
                'eventAddr' => '雲林縣斗六市湖山水庫梅林公園',
            ]);

            DB::table('events')->insert([
                'cityId' => '12',
                'eventSignupStartTime' => '2019-11-04 09:00:00',
                'eventSignupEndTime' => '2019-11-19 07:00:00',
                'eventRunStartTime' => '2019-12-01 09:00:00',
                'eventRunEndTime' => '2019-12-03 07:00:00',
                'eventTittle' => '台南場',
                'eventImage' => 'TNN201910.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '台南市安平戀愛廣場',
            ]);

            DB::table('events')->insert([
                'cityId' => '13',
                'eventSignupStartTime' => '2019-11-01 09:00:00',
                'eventSignupEndTime' => '2019-11-30 07:00:00',
                'eventRunStartTime' => '2019-12-01 09:00:00',
                'eventRunEndTime' => '2019-12-01 07:00:00',
                'eventTittle' => '高雄場',
                'eventImage' => 'KHH201912.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '高雄橋頭新市鎮',
            ]);

            DB::table('events')->insert([
                'cityId' => '14',
                'eventSignupStartTime' => '2019-11-03 09:00:00',
                'eventSignupEndTime' => '2019-11-18 07:00:00',
                'eventRunStartTime' => '2019-12-01 09:00:00',
                'eventRunEndTime' => '2019-12-03 07:00:00',
                'eventTittle' => '屏東場',
                'eventImage' => 'PCH202001.jpg',
                'eventTel' => '0800-111-222',
                'eventAddr' => '屏東縣潮州鎮林後四林平地森林園區',
            ]);

            DB::table('events')->insert([
                'cityId' => '15',
                'eventSignupStartTime' => '2019-11-07 09:00:00',
                'eventSignupEndTime' => '2019-11-22 07:00:00',
                'eventRunStartTime' => '2019-12-06 09:00:00',
                'eventRunEndTime' => '2019-12-08 07:00:00',
                'eventTittle' => ' 宜蘭場',
                'eventImage' => 'ILN202001.jpg',
                'eventTel' => '0800-111-222',
                'eventAddr' => '宜蘭冬山河親水公園',
            ]);

        }
    }
}
