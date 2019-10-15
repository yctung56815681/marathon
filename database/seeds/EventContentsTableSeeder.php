<?php

use Illuminate\Database\Seeder;

class EventContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('event_contents')->get()->count() == 0) {

            DB::table('event_contents')->insert([  
                'eventId' => '1',
                'eventContentNews' =>'
                    {" <center><h3>團體報名</h3></center> ":"<div class=\' fold o \' style=\' display: block \' >一起來感受ZEPRO路跑的熱情活力，歡迎喜愛陽光運動的夥伴一同熱情參與，期待有您的加入<br />
                        我們急需熱情的你，一起來為跑者加油！<br/>
                      報名連結：<br/>
                    ⚠人數額滿或組別額滿、依主辦單位安排為主<br/>
                    ⚠主辦單位擁有最終調整權力<br/>
                    ⚠注意事項：<br />
                        錄取者，主辦單位會以電話或簡訊通知；未錄取則不另行通知。<br />
                        錄取者若未能依時間參加，請務必提前來電告知！以免系統備註異常，影響後續報名資格。</div>",  
                    "":"<center><img src=\'/img/pt02.jpg\' style=\'width: 100%; max-width: 100%;\' /></center>", 
                     "<center><h3>招募志工夥伴</h3></center>":" <h5>內容1</h5>"} ',
                'eventContentSignup' => '{"<h3>標題1</h3>":"<h5>內容1</h5>", " ":" ", "<h3>標題2</h3>":"<h5>內容2</h5>"}',
                'eventContentReward' => '{"<h3>標題1</h3>":"<h5>內容1</h5>", " ":" ", "<h3>標題2</h3>":"<h5>內容2</h5>"}',
                'eventContentActSpec' => '{"<h3>標題1</h3>":"<h5>內容1</h5>", " ":" ", "<h3>標題2</h3>":"<h5>內容2</h5>"}'
            ]);

            DB::table('event_contents')->insert([  
                'eventId' => '2',
                'eventContentNews' => '',
                'eventContentSignup' => '',
                'eventContentReward' => '',
                'eventContentActSpec' => ''
            ]);

            DB::table('event_contents')->insert([  
                'eventId' => '3',
                'eventContentNews' => '',
                'eventContentSignup' => '',
                'eventContentReward' => '',
                'eventContentActSpec' => ''
            ]);

            DB::table('event_contents')->insert([  
                'eventId' => '4',
                'eventContentNews' => '',
                'eventContentSignup' => '',
                'eventContentReward' => '',
                'eventContentActSpec' => ''
            ]);

            DB::table('event_contents')->insert([  
                'eventId' => '5',
                'eventContentNews' => '',
                'eventContentSignup' => '',
                'eventContentReward' => '',
                'eventContentActSpec' => ''
            ]);

            DB::table('event_contents')->insert([  
                'eventId' => '6',
                'eventContentNews' => '',
                'eventContentSignup' => '',
                'eventContentReward' => '',
                'eventContentActSpec' => ''
            ]);

            DB::table('event_contents')->insert([  
                'eventId' => '7',
                'eventContentNews' => '',
                'eventContentSignup' => '',
                'eventContentReward' => '',
                'eventContentActSpec' => ''
            ]);

            DB::table('event_contents')->insert([  
                'eventId' => '8',
                'eventContentNews' => '',
                'eventContentSignup' => '',
                'eventContentReward' => '',
                'eventContentActSpec' => ''
            ]);

            DB::table('event_contents')->insert([  
                'eventId' => '9',
                'eventContentNews' => '',
                'eventContentSignup' => '',
                'eventContentReward' => '',
                'eventContentActSpec' => ''
            ]);

        }



    }
}
