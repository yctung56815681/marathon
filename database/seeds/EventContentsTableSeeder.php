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
                    {"eventNewsImage":" ",
                     "eventNewstext1":" ",
                     "eventNewstext2":" "}',
                'eventContentSignup' => '
                   {"eventMethodImage":" ",
                    "eventMethodtext1":" ",
                    "eventMethodtext2":" "}',
                'eventContentReward' => '
                    {"eventRaceImage":" ",
                     "eventRacetext1":" ",
                     "eventRacetext2":" "}',
                'eventContentActSpec' => '
                   {"eventRuleImage":" ",
                    "eventRuletext1":" ",
                    "eventRuletext2":" "}',
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
