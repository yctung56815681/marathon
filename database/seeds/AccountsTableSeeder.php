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

            for ($i = 0; $i < 100; $i++) {
                $username = "u" . ($i + 1) . "__" . Str::random(30);
                // $password = "p" . ($i + 1) . "__" . Str::random(64);
                $password = "p" . ($i + 1);
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
