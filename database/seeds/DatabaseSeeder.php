<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(RunsTableSeeder::class);
        $this->call(EventContentsTableSeeder::class);
        $this->call(OrganizersTableSeeder::class);
        $this->call(CoorganizersTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OrderGroupsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(OrderDetailsTableSeeder::class);
    }
}
