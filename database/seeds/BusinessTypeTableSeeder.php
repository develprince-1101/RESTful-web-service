<?php

use Illuminate\Database\Seeder;
use App\BusinessType;

class BusinessTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BusinessType::create([
            'description' => 'Mobile Services',
        ]);

        BusinessType::create([
            'description' => 'Food Services',
        ]);

        BusinessType::create([
            'description' => 'Clothing Stores'
        ]);

        BusinessType::create([
            'description' => 'Laundry Service'
        ]);

        BusinessType::create([
            'description' => 'Internet Cafe'
        ]);

        BusinessType::create([
            'description' => 'Convenient Store'
        ]);

        BusinessType::create([
            'description' => 'Shopping Mall'
        ]);

        BusinessType::create([
            'description' => 'Repairs'
        ]);


    }
}
