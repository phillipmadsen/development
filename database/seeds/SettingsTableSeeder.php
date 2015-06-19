<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {

        DB::table('settings')->truncate();

        $settings = array(
            'settings'   => '{
                "site_title":"Grace Management",
                "ga_code":"UA-64291412-1",
                "meta_keywords":"Affordable Programmers, Multi Language Content Management System and Site Administator",
                "meta_description":"Affordable Programmers Multi Language Content Management System and Site Administator"
            }',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
            'lang'       => 'tr');

        DB::table('settings')->insert($settings);
    }
}
