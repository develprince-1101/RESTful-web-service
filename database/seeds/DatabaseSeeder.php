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
        $this->call(AddressSeeder::class);
        $this->call(BarangaysSeeder::class);
        $this->call(DoctorSeeder::class);




    }
}
