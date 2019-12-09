<?php

use Illuminate\Database\Seeder;
use App\BusinessEntity;


class BusinessEntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessEntity::create([
            'name' => 'Jollibee',
            'latitude' => 8.105,
            'longitude' => 124.106,
            'contact_number' => '+632244',
            'business_type_id' => 2
        ]);
        BusinessEntity::create([
            'name' => 'Mcdonalds',
            'latitude' => 8.224,
            'longitude' => 124.102,
            'contact_number' => '+632346',
            'business_type_id' => 2
        ]);
        BusinessEntity::create([
            'name' => 'Penshoppe',
            'latitude' => 8.214,
            'longitude' => 124.52,
            'contact_number' => '+632446',
            'business_type_id' => 3
        ]);
        BusinessEntity::create([
            'name' => 'Bench',
            'latitude' => 8.354,
            'longitude' => 124.152,
            'contact_number' => '+633446',
            'business_type_id' => 3
        ]);
        BusinessEntity::create([
            'name' => 'WizMaster',
            'latitude' => 8.454,
            'longitude' => 124.182,
            'contact_number' => '+631446',
            'business_type_id' => 1
        ]);
        BusinessEntity::create([
            'name' => 'FlashCom',
            'latitude' => 8.654,
            'longitude' => 124.222,
            'contact_number' => '+635346',
            'business_type_id' => 1
        ]);
        BusinessEntity::create([
            'name' => 'Quick Wash',
            'latitude' => 8.614,
            'longitude' => 124.122,
            'contact_number' => '+630346',
            'business_type_id' => 4
        ]);
        BusinessEntity::create([
            'name' => 'Heaven Scent',
            'latitude' => 8.604,
            'longitude' => 124.182,
            'contact_number' => '+635346',
            'business_type_id' => 4
        ]);
        BusinessEntity::create([
            'name' => 'Wimax',
            'latitude' => 8.314,
            'longitude' => 124.132,
            'contact_number' => '+632346',
            'business_type_id' => 5
        ]);
        BusinessEntity::create([
            'name' => 'G7',
            'latitude' => 8.614,
            'longitude' => 124.122,
            'contact_number' => '+630346',
            'business_type_id' => 5
        ]);
        BusinessEntity::create([
            'name' => '7 eleven',
            'latitude' => 8.617,
            'longitude' => 124.022,
            'contact_number' => '+639346',
            'business_type_id' => 6
        ]);
        BusinessEntity::create([
            'name' => '24 Shoppe',
            'latitude' => 8.610,
            'longitude' => 124.522,
            'contact_number' => '+633146',
            'business_type_id' => 6
        ]);
        BusinessEntity::create([
            'name' => 'Robinsons',
            'latitude' => 8.611,
            'longitude' => 124.162,
            'contact_number' => '+638346',
            'business_type_id' => 7
        ]);
        BusinessEntity::create([
            'name' => 'Gaisano',
            'latitude' => 8.613,
            'longitude' => 124.120,
            'contact_number' => '+631346',
            'business_type_id' => 7
        ]);
        BusinessEntity::create([
            'name' => 'Ilicom',
            'latitude' => 8.619,
            'longitude' => 124.922,
            'contact_number' => '+61446',
            'business_type_id' => 8
        ]);
        BusinessEntity::create([
            'name' => 'Primehub',
            'latitude' => 8.604,
            'longitude' => 124.121,
            'contact_number' => '+630346',
            'business_type_id' => 8
        ]);


    }
}
