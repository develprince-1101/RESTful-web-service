<?php

use Illuminate\Database\Seeder;
use App\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'street' => 'villaverde',
            'building_number' => '14C'
        ]);
        Address::create([
            'street' => 'tibanga',
            'building_number' => '15A'
        ]);
        Address::create([
            'street' => 'Santiago',
            'building_number' => '24F'
        ]);
        Address::create([
            'street' => 'San Miguel',
            'building_number' => '11C'
        ]);
        Address::create([
            'street' => 'Aguinaldo',
            'building_number' => '12I'
        ]);
        Address::create([
            'street' => 'Mahayahay',
            'building_number' => '18H'
        ]);
    }
}
