<?php

use Illuminate\Database\Seeder;

class CoorganizersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('coorganizers')->get()->count() == 0) {
            DB::table('coorganizers')->insert([
                'eventId' => '1',
                'coorganizerName' => '彰化縣',
                'coorganizerWeb' => 'www.changhua.org',
                'coorganizerAddr' => '彰化縣中正路',
                'coorganizerTel' => '0800-111-222',
                'coorganizerEmail' => 'service@changhua.org',
            ]);
            DB::table('coorganizers')->insert([
                'eventId' => '1',
                'coorganizerName' => '苗栗縣',
                'coorganizerWeb' => 'www.miaoli.org',
                'coorganizerAddr' => '苗栗縣中正路',
                'coorganizerTel' => '0800-333-444',
                'coorganizerEmail' => 'service@miaoli.org',
            ]);
            DB::table('coorganizers')->insert([
                'eventId' => '2',
                'coorganizerName' => '宜蘭縣',
                'coorganizerWeb' => 'www.yilan.com',
                'coorganizerAddr' => '宜蘭縣中正路',
                'coorganizerTel' => '0800-555-666',
                'coorganizerEmail' => 'service@yilan.org',
            ]);
            DB::table('coorganizers')->insert([
                'eventId' => '2',
                'coorganizerName' => '花蓮縣',
                'coorganizerWeb' => 'www.hualien.org',
                'coorganizerAddr' => '花蓮縣中正路',
                'coorganizerTel' => '0800-777-888',
                'coorganizerEmail' => 'service@hualien.org',
            ]);
            DB::table('coorganizers')->insert([
                'eventId' => '3',
                'coorganizerName' => '高雄市',
                'coorganizerWeb' => 'www.kaohsiung.org',
                'coorganizerAddr' => '高雄市中正路',
                'coorganizerTel' => '0800-999-000',
                'coorganizerEmail' => 'service@kaohsiung.org',
            ]);
            DB::table('coorganizers')->insert([
                'eventId' => '3',
                'coorganizerName' => '屏東縣',
                'coorganizerWeb' => 'www.pingtung.org',
                'coorganizerAddr' => '屏東縣中正路',
                'coorganizerTel' => '0809-111-222',
                'coorganizerEmail' => 'service@pingtung.org',
            ]);
            DB::table('coorganizers')->insert([
                'eventId' => '4',
                'coorganizerName' => '台中市',
                'coorganizerWeb' => 'www.taichung.org',
                'coorganizerAddr' => '台中市中正路',
                'coorganizerTel' => '0809-333-444',
                'coorganizerEmail' => 'service@taichung.org',
            ]);
            DB::table('coorganizers')->insert([
                'eventId' => '4',
                'coorganizerName' => '南投縣',
                'coorganizerWeb' => 'www.nantou.org',
                'coorganizerAddr' => '南投縣中正路',
                'coorganizerTel' => '0809-555-666',
                'coorganizerEmail' => 'service@nantou.org',
            ]);
            DB::table('coorganizers')->insert([
                'eventId' => '5',
                'coorganizerName' => '雲林縣',
                'coorganizerWeb' => 'www.yunlin.org',
                'coorganizerAddr' => '雲林縣中正路',
                'coorganizerTel' => '0809-777-888',
                'coorganizerEmail' => 'service@yunlin.org',
            ]);
            DB::table('coorganizers')->insert([
                'eventId' => '5',
                'coorganizerName' => '嘉義縣',
                'coorganizerWeb' => 'www.chiayi.org',
                'coorganizerAddr' => '嘉義縣中正路',
                'coorganizerTel' => '0809-999-000',
                'coorganizerEmail' => 'service@chiayi.org',
            ]);
        }
    }
}
