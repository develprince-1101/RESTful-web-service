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
        $addresses = array(
            array('id'=> 1, 'city' => 'Iligan', 'zip_code' => '9200', 'province' => 'Lanao Del Norte', 'country' => 'Philippines',),
        );

        Address::insert($addresses);
    }
}
