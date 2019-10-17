<?php

use Illuminate\Database\Seeder;

class OrganizersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('organizers')->get()->count() == 0) {
            DB::table('organizers')->insert([
                'eventId' => '1',
                'organizerName' => '內政部',
                'organizerWeb' => 'www.內政部.org',
                'organizerAddr' => '內政部光復路',
                'organizerTel' => '01-1111-2222',
                'organizerEmail' => 'service@內政部.org',
            ]);
            DB::table('organizers')->insert([
                'eventId' => '1',
                'organizerName' => '外交部',
                'organizerWeb' => 'www.外交部.org',
                'organizerAddr' => '外交部光復路',
                'organizerTel' => '02-3333-4444',
                'organizerEmail' => 'service@外交部.org',
            ]);
            DB::table('organizers')->insert([
                'eventId' => '2',
                'organizerName' => '國防部',
                'organizerWeb' => 'www.國防部.org',
                'organizerAddr' => '國防部光復路',
                'organizerTel' => '03-5555-6666',
                'organizerEmail' => 'service@國防部.org',
            ]);
            DB::table('organizers')->insert([
                'eventId' => '2',
                'organizerName' => '財政部',
                'organizerWeb' => 'www.財政部.org',
                'organizerAddr' => '財政部光復路',
                'organizerTel' => '04-7777-8888',
                'organizerEmail' => 'service@財政部.org',
            ]);
            DB::table('organizers')->insert([
                'eventId' => '3',
                'organizerName' => '教育部',
                'organizerWeb' => 'www.教育部.org',
                'organizerAddr' => '教育部光復路',
                'organizerTel' => '05-9999-0000',
                'organizerEmail' => 'service@教育部.org',
            ]);
            DB::table('organizers')->insert([
                'eventId' => '3',
                'organizerName' => '法務部',
                'organizerWeb' => 'www.法務部.org',
                'organizerAddr' => '法務部光復路',
                'organizerTel' => '06-1122-3344',
                'organizerEmail' => 'service@法務部.org',
            ]);
            DB::table('organizers')->insert([
                'eventId' => '4',
                'organizerName' => '經濟部',
                'organizerWeb' => 'www.經濟部.org',
                'organizerAddr' => '經濟部光復路',
                'organizerTel' => '07-5566-7788',
                'organizerEmail' => 'service@經濟部.org',
            ]);
            DB::table('organizers')->insert([
                'eventId' => '4',
                'organizerName' => '交通部',
                'organizerWeb' => 'www.交通部.org',
                'organizerAddr' => '交通部光復路',
                'organizerTel' => '08-9900-1122',
                'organizerEmail' => 'service@交通部.org',
            ]);
            DB::table('organizers')->insert([
                'eventId' => '5',
                'organizerName' => '勞動部',
                'organizerWeb' => 'www.勞動部.org',
                'organizerAddr' => '勞動部光復路',
                'organizerTel' => '09-1234-5678',
                'organizerEmail' => 'service@勞動部.org',
            ]);
            DB::table('organizers')->insert([
                'eventId' => '5',
                'organizerName' => '衛生福利部',
                'organizerWeb' => 'www.衛生福利部.org',
                'organizerAddr' => '衛生福利部光復路',
                'organizerTel' => '10-1234-5678',
                'organizerEmail' => 'service@衛生福利部.org',
            ]);
        }
    }
}
