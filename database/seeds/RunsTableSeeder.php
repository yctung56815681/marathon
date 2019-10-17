<?php

use Illuminate\Database\Seeder;

class RunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('runs')->get()->count() == 0) {

            DB::table('runs')->insert([
                'eventId' => '1',
                'runType' => 'L',
                'runName' => '21K',
                'runNameLong' => '21K 超值組',
                'runPrice' => '2100',
            ]);
            DB::table('runs')->insert([
                'eventId' => '1',
                'runType' => 'M',
                'runName' => '10K',
                'runNameLong' => '10K 超值組',
                'runPrice' => '1400',
            ]);
            DB::table('runs')->insert([
                'eventId' => '1',
                'runType' => 'S',
                'runName' => '5K',
                'runNameLong' => '5K 超值組',
                'runPrice' => '600',
            ]);
            // ==========
            DB::table('runs')->insert([
                'eventId' => '2',
                'runType' => 'L',
                'runName' => '21K',
                'runNameLong' => '21K 豪華組',
                'runPrice' => '2300',
            ]);
            DB::table('runs')->insert([
                'eventId' => '2',
                'runType' => 'M',
                'runName' => '10K',
                'runNameLong' => '10K 豪華組',
                'runPrice' => '1500',
            ]);
            DB::table('runs')->insert([
                'eventId' => '2',
                'runType' => 'S',
                'runName' => '4K',
                'runNameLong' => '4K 豪華組',
                'runPrice' => '800',
            ]);
            // ==========
            DB::table('runs')->insert([
                'eventId' => '3',
                'runType' => 'L',
                'runName' => '23K',
                'runNameLong' => '23K 豪華組',
                'runPrice' => '2200',
            ]);
            DB::table('runs')->insert([
                'eventId' => '3',
                'runType' => 'M',
                'runName' => '10K',
                'runNameLong' => '10K 豪華組',
                'runPrice' => '1600',
            ]);
            DB::table('runs')->insert([
                'eventId' => '3',
                'runType' => 'S',
                'runName' => '5K',
                'runNameLong' => '5K 豪華組',
                'runPrice' => '800',
            ]);
            // ==========
            DB::table('runs')->insert([
                'eventId' => '4',
                'runType' => 'L',
                'runName' => '21K',
                'runNameLong' => '21K 豪華組',
                'runPrice' => '2300',
            ]);
            DB::table('runs')->insert([
                'eventId' => '4',
                'runType' => 'M',
                'runName' => '10K',
                'runNameLong' => '10K 豪華組',
                'runPrice' => '1500',
            ]);
            DB::table('runs')->insert([
                'eventId' => '4',
                'runType' => 'S',
                'runName' => '5K',
                'runNameLong' => '5K 豪華組',
                'runPrice' => '350',
            ]);
            // ==========
            DB::table('runs')->insert([
                'eventId' => '5',
                'runType' => 'L',
                'runName' => '23K',
                'runNameLong' => '23K 豪華組',
                'runPrice' => '2300',
            ]);
            DB::table('runs')->insert([
                'eventId' => '5',
                'runType' => 'M',
                'runName' => '16K',
                'runNameLong' => '16K 豪華組',
                'runPrice' => '1600',
            ]);
            DB::table('runs')->insert([
                'eventId' => '5',
                'runType' => 'S',
                'runName' => '8K',
                'runNameLong' => '8K 豪華組',
                'runPrice' => '800',
            ]);
            // ==========
            DB::table('runs')->insert([
                'eventId' => '6',
                'runType' => 'L',
                'runName' => '21K',
                'runNameLong' => '21K 豪華組',
                'runPrice' => '2300',
            ]);
            DB::table('runs')->insert([
                'eventId' => '6',
                'runType' => 'M',
                'runName' => '10K',
                'runNameLong' => '10K 豪華組',
                'runPrice' => '1500',
            ]);
            DB::table('runs')->insert([
                'eventId' => '6',
                'runType' => 'S',
                'runName' => '3.5K',
                'runNameLong' => '3.5K 豪華組',
                'runPrice' => '800',
            ]);
            // ==========
            DB::table('runs')->insert([
                'eventId' => '7',
                'runType' => 'L',
                'runName' => '21K',
                'runNameLong' => '21K 豪華組',
                'runPrice' => '2300',
            ]);
            // ==========
            DB::table('runs')->insert([
                'eventId' => '7',
                'runType' => 'M',
                'runName' => '10K',
                'runNameLong' => '10K 豪華組',
                'runPrice' => '1600',
            ]);
            DB::table('runs')->insert([
                'eventId' => '7',
                'runType' => 'S',
                'runName' => '5K',
                'runNameLong' => '5K 豪華組',
                'runPrice' => '700',
            ]);
            // ==========
            DB::table('runs')->insert([
                'eventId' => '8',
                'runType' => 'L',
                'runName' => '21K',
                'runNameLong' => '21K 豪華組',
                'runPrice' => '2300',
            ]);
            DB::table('runs')->insert([
                'eventId' => '8',
                'runType' => 'M',
                'runName' => '10K',
                'runNameLong' => '10K 豪華組',
                'runPrice' => '1500',
            ]);
            DB::table('runs')->insert([
                'eventId' => '8',
                'runType' => 'S',
                'runName' => '5K',
                'runNameLong' => '5K 豪華組',
                'runPrice' => '900',
            ]);
            // ==========
            DB::table('runs')->insert([
                'eventId' => '9',
                'runType' => 'L',
                'runName' => '21K',
                'runNameLong' => '21K 豪華組',
                'runPrice' => '1600',
            ]);
            DB::table('runs')->insert([
                'eventId' => '9',
                'runType' => 'M',
                'runName' => '10K',
                'runNameLong' => '10K 豪華組',
                'runPrice' => '1300',
            ]);
            DB::table('runs')->insert([
                'eventId' => '9',
                'runType' => 'S',
                'runName' => '5K',
                'runNameLong' => '5K 豪華組',
                'runPrice' => '500',
            ]);

        }
    }
}
