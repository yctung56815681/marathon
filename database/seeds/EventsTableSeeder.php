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
                'eventSignupStartTime' => '2019-08-24 09:00:00',
                'eventSignupEndTime' => '2019-09-24 18:00:00',
                'eventRunStartTime' => '2019-11-24 09:00:00',
                'eventRunEndTime' => '2019-11-24 18:00:00',
                'eventTittle' => '2019新北場',
                'eventImage' => 'TPH201911.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '浮洲橋下',
            ]);

            DB::table('events')->insert([
                'cityId' => '4',
                'eventSignupStartTime' => '2019-08-03 09:00:00',
                'eventSignupEndTime' => '2019-09-03 18:00:00',
                'eventRunStartTime' => '2019-11-03 07:00:00',
                'eventRunEndTime' => '2019-11-03 18:00:00',
                'eventTittle' => '2019桃園場',
                'eventImage' => 'TYC201911.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '永安漁港',
            ]);

            DB::table('events')->insert([
                'cityId' => '7',
                'eventSignupStartTime' => '2019-10-08 09:00:00',
                'eventSignupEndTime' => '2019-11-08 18:00:00',
                'eventRunStartTime' => '2019-12-08 07:00:00',
                'eventRunEndTime' => '2019-12-08 18:00:00',
                'eventTittle' => '2019台中場',
                'eventImage' => 'TXG201912.jpg',
                'eventTel' => '0800-555-666',
                'eventAddr' => '太平區運動場',
            ]);

            DB::table('events')->insert([
                'cityId' => '8',
                'eventSignupStartTime' => '2019-10-09 09:00:00',
                'eventSignupEndTime' => '2019-11-09 18:00:00',
                'eventRunStartTime' => '2020-02-09 09:00:00',
                'eventRunEndTime' => '2020-02-09 18:00:00',
                'eventTittle' => '2020彰化場',
                'eventImage' => 'CWH202002.jpg',
                'eventTel' => '0800-271-637',
                'eventAddr' => '鹿港鎮運動場',
            ]);

            DB::table('events')->insert([
                'cityId' => '10',
                'eventSignupStartTime' => '2019-06-22 09:00:00',
                'eventSignupEndTime' => '2019-07-22 18:00:00',
                'eventRunStartTime' => '2019-09-22 09:00:00',
                'eventRunEndTime' => '2019-09-22 18:00:00',
                'eventTittle' => '2019雲林場',
                'eventImage' => 'YUN201909.jpg',
                'eventTel' => '0800-777-888',
                'eventAddr' => '斗六市梅林公園',
            ]);

            DB::table('events')->insert([
                'cityId' => '12',
                'eventSignupStartTime' => '2019-07-20 09:00:00',
                'eventSignupEndTime' => '2019-08-20 18:00:00',
                'eventRunStartTime' => '2019-10-20 09:00:00',
                'eventRunEndTime' => '2019-10-20 18:00:00',
                'eventTittle' => '2019台南場',
                'eventImage' => 'TNN201910.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '安平戀愛廣場',
            ]);

            DB::table('events')->insert([
                'cityId' => '13',
                'eventSignupStartTime' => '2019-10-02 09:00:00',
                'eventSignupEndTime' => '2019-11-02 18:00:00',
                'eventRunStartTime' => '2019-12-29 09:00:00',
                'eventRunEndTime' => '2019-12-29 18:00:00',
                'eventTittle' => '2019高雄場',
                'eventImage' => 'KHH201912.jpg',
                'eventTel' => '0800-333-444',
                'eventAddr' => '橋頭新市鎮',
            ]);

            DB::table('events')->insert([
                'cityId' => '14',
                'eventSignupStartTime' => '2019-08-06 09:00:00',
                'eventSignupEndTime' => '2019-09-06 18:00:00',
                'eventRunStartTime' => '2019-10-06 09:00:00',
                'eventRunEndTime' => '2019-10-06 18:00:00',
                'eventTittle' => '2019屏東場',
                'eventImage' => 'PCH201910.jpg',
                'eventTel' => '0800-111-222',
                'eventAddr' => '四林平地森林園區',
            ]);

            DB::table('events')->insert([
                'cityId' => '15',
                'eventSignupStartTime' => '2019-10-05 09:00:00',
                'eventSignupEndTime' => '2019-11-05 18:00:00',
                'eventRunStartTime' => '2020-01-05 09:00:00',
                'eventRunEndTime' => '2020-01-05 18:00:00',
                'eventTittle' => ' 2020宜蘭場',
                'eventImage' => 'ILN202001.jpg',
                'eventTel' => '0800-111-222',
                'eventAddr' => '冬山河親水公園',
            ]);

            DB::table('events')->insert([
                'cityId' => '7',
                'eventSignupStartTime' => '2020-01-08 09:00:00',
                'eventSignupEndTime' => '2020-02-08 18:00:00',
                'eventRunStartTime' => '2020-03-08 07:00:00',
                'eventRunEndTime' => '2020-03-08 18:00:00',
                'eventTittle' => '2020台中場',
                'eventImage' => 'TXG202003.jpg',
                'eventTel' => '0800-555-666',
                'eventAddr' => '太平區運動場',
            ]);
        }
    }
}
