<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('cities')->get()->count() == 0) {
            DB::table('cities')->insert([
                'cityNo' => 'TPE',
                'cityNameCh' => '台北',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'TPH',
                'cityNameCh' => '新北',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'KLU',
                'cityNameCh' => '基隆',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'TYC',
                'cityNameCh' => '桃園',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'HSC',
                'cityNameCh' => '新竹',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'MAL',
                'cityNameCh' => '苗栗',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'TXG',
                'cityNameCh' => '台中',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'CWH',
                'cityNameCh' => '彰化',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'NTO',
                'cityNameCh' => '南投',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'YUN',
                'cityNameCh' => '雲林',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'CHY',
                'cityNameCh' => '嘉義',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'TNN',
                'cityNameCh' => '台南',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'KHH',
                'cityNameCh' => '高雄',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'PCH',
                'cityNameCh' => '屏東',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'ILN',
                'cityNameCh' => '宜蘭',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'HWA',
                'cityNameCh' => '花蓮',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'TTT',
                'cityNameCh' => '台東',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'PEH',
                'cityNameCh' => '澎湖',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'KMN',
                'cityNameCh' => '金門',
            ]);
            DB::table('cities')->insert([
                'cityNo' => 'LNN',
                'cityNameCh' => '連江',
            ]);
            
        }
    }
}
