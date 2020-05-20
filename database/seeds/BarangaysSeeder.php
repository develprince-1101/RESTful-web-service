<?php

use Illuminate\Database\Seeder;
use App\Barangay;

class BarangaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangays = array(
            array('id'=> 1, 'address_id' => 1, 'barangay_name' => 'Abuno', 'latitude' => 8.1707, 'longitude' => 124.2547, ),
            array('id'=> 2, 'address_id' => 1, 'barangay_name' => 'Acmac', 'latitude' => 8.2756, 'longitude' => 124.2701, ),
            array('id'=> 3, 'address_id' => 1, 'barangay_name' => 'Bagong Silang', 'latitude' => 8.2411, 'longitude' => 124.2555, ),
            array('id'=> 4, 'address_id' => 1, 'barangay_name' => 'Bonbonon', 'latitude' => 8.2613, 'longitude' => 124.301, ),
            array('id'=> 5, 'address_id' => 1, 'barangay_name' => 'Bunawan', 'latitude' => 8.3158, 'longitude' => 124.3173, ),
            array('id'=> 6, 'address_id' => 1, 'barangay_name' => 'Buru-un', 'latitude' => 8.1835, 'longitude' => 124.1825, ),
            array('id'=> 7, 'address_id' => 1, 'barangay_name' => 'Dalipuga', 'latitude' => 8.3136, 'longitude' => 124.2666, ),
            array('id'=> 8, 'address_id' => 1, 'barangay_name' => 'Del Carmen', 'latitude' => 8.2308, 'longitude' => 124.2593, ),
            array('id'=> 9, 'address_id' => 1, 'barangay_name' => 'Digkilaan', 'latitude' => 8.2486, 'longitude' => 124.3466, ),
            array('id'=> 10, 'address_id' => 1, 'barangay_name' => 'Ditucalan', 'latitude' => 8.1679, 'longitude' => 124.1923, ),
            array('id'=> 11, 'address_id' => 1, 'barangay_name' => 'Dulag', 'latitude' => 8.1981, 'longitude' => 124.3802, ),
            array('id'=> 12, 'address_id' => 1, 'barangay_name' => 'Hinaplanon', 'latitude' => 8.2478, 'longitude' => 124.2613, ),
            array('id'=> 13, 'address_id' => 1, 'barangay_name' => 'Hindang', 'latitude' => 8.3103, 'longitude' => 124.3645, ),
            array('id'=> 14, 'address_id' => 1, 'barangay_name' => 'Kabacsanan', 'latitude' => 8.2785, 'longitude' => 124.3269, ),
            array('id'=> 15, 'address_id' => 1, 'barangay_name' => 'Kalilangan', 'latitude' => 8.1753, 'longitude' => 124.4489, ),
            array('id'=> 16, 'address_id' => 1, 'barangay_name' => 'Kiwalan', 'latitude' => 8.2857, 'longitude' => 124.2878, ),
            array('id'=> 17, 'address_id' => 1, 'barangay_name' => 'Lanipao', 'latitude' => 8.213, 'longitude' => 124.3362, ),
            array('id'=> 18, 'address_id' => 1, 'barangay_name' => 'Luinab', 'latitude' => 8.2397, 'longitude' => 124.2743, ),
            array('id'=> 19, 'address_id' => 1, 'barangay_name' => 'Mahayahay', 'latitude' => 8.2242, 'longitude' => 124.2408, ),
            array('id'=> 20, 'address_id' => 1, 'barangay_name' => 'Mainit', 'latitude' => 8.2982, 'longitude' => 124.3949, ),
            array('id'=> 21, 'address_id' => 1, 'barangay_name' => 'Mandulog', 'latitude' => 8.2336, 'longitude' => 124.3129, ),
            array('id'=> 22, 'address_id' => 1, 'barangay_name' => 'Maria Cristina', 'latitude' => 8.1638, 'longitude' => 124.2054, ),
            array('id'=> 23, 'address_id' => 1, 'barangay_name' => 'Pala-o', 'latitude' => 8.2207, 'longitude' => 124.2576, ),
            array('id'=> 24, 'address_id' => 1, 'barangay_name' => 'Panoroganan', 'latitude' => 8.1511, 'longitude' => 124.5166, ),
            array('id'=> 25, 'address_id' => 1, 'barangay_name' => 'Poblacion', 'latitude' => 8.2306, 'longitude' => 124.2371, ),
            array('id'=> 26, 'address_id' => 1, 'barangay_name' => 'Puga-an', 'latitude' => 8.2236, 'longitude' => 124.2838, ),
            array('id'=> 27, 'address_id' => 1, 'barangay_name' => 'Rogongon', 'latitude' => 8.2396, 'longitude' => 124.4754, ),
            array('id'=> 28, 'address_id' => 1, 'barangay_name' => 'San Miguel', 'latitude' => 8.237, 'longitude' => 124.2473, ),
            array('id'=> 29, 'address_id' => 1, 'barangay_name' => 'San Roque', 'latitude' => 8.2579, 'longitude' => 124.2712, ),
            array('id'=> 30, 'address_id' => 1, 'barangay_name' => 'Santa Elena', 'latitude' => 8.1906, 'longitude' => 124.2279, ),
            array('id'=> 31, 'address_id' => 1, 'barangay_name' => 'Santa Filomena', 'latitude' => 8.2644, 'longitude' => 124.2667, ),
            array('id'=> 32, 'address_id' => 1, 'barangay_name' => 'Santiago', 'latitude' => 8.2466, 'longitude' => 124.2433, ),
            array('id'=> 33, 'address_id' => 1, 'barangay_name' => 'Santo Rosario', 'latitude' => 8.2477, 'longitude' => 124.2473, ),
            array('id'=> 34, 'address_id' => 1, 'barangay_name' => 'Saray', 'latitude' => 8.2364, 'longitude' => 124.2402, ),
            array('id'=> 35, 'address_id' => 1, 'barangay_name' => 'Suarez', 'latitude' => 8.1889, 'longitude' => 124.2131, ),
            array('id'=> 36, 'address_id' => 1, 'barangay_name' => 'Tambacan', 'latitude' => 8.2179, 'longitude' => 124.2337, ),
            array('id'=> 37, 'address_id' => 1, 'barangay_name' => 'Tibanga', 'latitude' => 8.2404, 'longitude' => 124.2432, ),
            array('id'=> 38, 'address_id' => 1, 'barangay_name' => 'Tipanoy', 'latitude' => 8.1941, 'longitude' => 124.2728, ),
            array('id'=> 39, 'address_id' => 1, 'barangay_name' => 'Tomas L. Cabili (Tominobo Proper)', 'latitude' => 8.2045, 'longitude' => 124.2266, ),
            array('id'=> 40, 'address_id' => 1, 'barangay_name' => 'Tominobo Upper', 'latitude' => 8.1602, 'longitude' => 124.2252, ),
            array('id'=> 41, 'address_id' => 1, 'barangay_name' => 'Tubod', 'latitude' => 8.2083, 'longitude' => 124.2404, ),
            array('id'=> 42, 'address_id' => 1, 'barangay_name' => 'Ubaldo Laya', 'latitude' => 8.2095, 'longitude' => 124.259, ),
            array('id'=> 43, 'address_id' => 1, 'barangay_name' => 'Upper Hinaplanon', 'latitude' => 8.2531, 'longitude' => 124.2813, ),
            array('id'=> 44, 'address_id' => 1, 'barangay_name' => 'Villa Verde', 'latitude' => 8.2255, 'longitude' => 124.2428, ),

            array('id'=> 45, 'address_id' => 1, 'barangay_name' => 'Andres Bonifacio Avenue, San Miguel', 'latitude' => 8.2409548, 'longitude' => 124.2472001, ),
            array('id'=> 46, 'address_id' => 1, 'barangay_name' => '137 Quezon Avenue Extension', 'latitude' => 8.2337623, 'longitude' => 124.2381962, ),
            array('id'=> 47, 'address_id' => 1, 'barangay_name' => 'Roxas Ave, Palao', 'latitude' => 8.227288, 'longitude' => 124.240578, ),
            array('id'=> 48, 'address_id' => 1, 'barangay_name' => 'Mercy Road Camague, Brgy. Tubod', 'latitude' => 8.2152041, 'longitude' => 124.231427, ),
            array('id'=> 49, 'address_id' => 1, 'barangay_name' => 'Miguel Sheker Ave, Palao', 'latitude' => 8.2307509, 'longitude' => 124.2492872, ),
            array('id'=> 50, 'address_id' => 1, 'barangay_name' => 'Quezon Av Ext', 'latitude' =>  8.2285617, 'longitude' => 124.2420763, ),
            array('id'=> 51, 'address_id' => 1, 'barangay_name' => 'Quezon Avenue Extension, Palao', 'latitude' =>8.2259824, 'longitude' => 124.2544897, ),

            array('id'=> 52, 'address_id' => 1, 'barangay_name' => 'Default', 'latitude' =>0, 'longitude' => 0, ),

        );

        Barangay::insert($barangays);
    }
}
