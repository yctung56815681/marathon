<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('accounts')->get()->count() == 0) {
            DB::table('accounts')->insert([
                'username' => 'admin',
                // 'password' => 'passwd',
                'password' => bcrypt('passwd'),
            ]);
            DB::table('accounts')->insert([
                'username' => 'iii',
                // 'password' => 'iii',
                'password' => bcrypt('iii'),
            ]);
            for ($i = 0; $i < 50; $i++) {
                $username = "u" . ($i + 2) . "__" . Str::random(30);
                // $password = "p" . ($i + 2) . "__" . Str::random(64);
                $password = "p" . ($i + 2);
                $password = bcrypt($password);
                DB::table('accounts')->insert([
                    'username' => $username,
                    'password' => $password,
                    // 'created_at' => date('Y-m-d H:i:s'),
                    // 'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
        }
    }
}
