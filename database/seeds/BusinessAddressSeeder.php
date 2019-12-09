<?php

use Illuminate\Database\Seeder;
use App\BusinessAddress;

class BusinessAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessAddress::create([
            'address_id' => 1,
            'business_entity_id' => 1
        ]);
        BusinessAddress::create([
            'address_id' => 2,
            'business_entity_id' => 2
        ]);
        BusinessAddress::create([
            'address_id' => 3,
            'business_entity_id' => 3
        ]);
        BusinessAddress::create([
            'address_id' => 4,
            'business_entity_id' => 4
        ]);
        BusinessAddress::create([
            'address_id' => 5,
            'business_entity_id' => 5
        ]);
        BusinessAddress::create([
            'address_id' => 6,
            'business_entity_id' => 6
        ]);
        BusinessAddress::create([
            'address_id' => 4,
            'business_entity_id' => 7
        ]);
        BusinessAddress::create([
            'address_id' => 1,
            'business_entity_id' => 8
        ]);
        BusinessAddress::create([
            'address_id' => 3,
            'business_entity_id' => 9
        ]);
        BusinessAddress::create([
            'address_id' => 2,
            'business_entity_id' => 10
        ]);
        BusinessAddress::create([
            'address_id' => 1,
            'business_entity_id' => 11
        ]);
        BusinessAddress::create([
            'address_id' => 5,
            'business_entity_id' => 12
        ]);
        BusinessAddress::create([
            'address_id' => 3,
            'business_entity_id' => 13
        ]);
        BusinessAddress::create([
            'address_id' => 6,
            'business_entity_id' => 14
        ]);
        BusinessAddress::create([
            'address_id' => 1,
            'business_entity_id' => 15
        ]);
        BusinessAddress::create([
            'address_id' => 2,
            'business_entity_id' => 16
        ]);

    }
}
