<?php

use Illuminate\Database\Seeder;
use App\Doctor;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doctors = array(
            array('id'=> 1, 'doc_name' => 'Dr. Cassidy Adhami', 'gender' => 'Male', 'contact_no' => '(571) 381-3058',),
            array('id'=> 2, 'doc_name' => 'Dr. Colton Arlen', 'gender' => 'Male', 'contact_no' => '(334) 933-7196',),
            array('id'=> 3, 'doc_name' => 'Dr. Gustavo Gallishaw', 'gender' => 'Male', 'contact_no' => '(975) 561-6683',),
            array('id'=> 4, 'doc_name' => 'Dr. Kimberly Prestwood', 'gender' => 'Male', 'contact_no' => '(223) 644-2238',),
            array('id'=> 5, 'doc_name' => 'Dr. Zander Tritz', 'gender' => 'Male', 'contact_no' => '(439) 365-4881',),
            array('id'=> 6, 'doc_name' => 'Dr. Cohen Bingle', 'gender' => 'Male', 'contact_no' => '(533) 313-6134',),
            array('id'=> 7, 'doc_name' => 'Dr. Israel Holahan', 'gender' => 'Male', 'contact_no' => '(445) 336-4695',),
            array('id'=> 8, 'doc_name' => 'Dr. Mary Kilgore', 'gender' => 'Male', 'contact_no' => '(221) 456-3158',),
            array('id'=> 9, 'doc_name' => 'Dr. Trenton Mcelravy', 'gender' => 'Male', 'contact_no' => '(319) 310-3600',),
            array('id'=> 10, 'doc_name' => 'Dr. Ty Mohamad', 'gender' => 'Male', 'contact_no' => '(715) 289-0320',),
            array('id'=> 11, 'doc_name' => 'Dr. Crystal Agrawal', 'gender' => 'Female', 'contact_no' => '(312) 620-7588',),
            array('id'=> 12, 'doc_name' => 'Dr. Jayla Buccino', 'gender' => 'Female', 'contact_no' => '(966) 758-1275',),
            array('id'=> 13, 'doc_name' => 'Dr. Jeanette Godbe', 'gender' => 'Female', 'contact_no' => '(605) 826-9055',),
            array('id'=> 14, 'doc_name' => 'Dr. Madelyn Preite', 'gender' => 'Female', 'contact_no' => '(837) 495-9988',),
            array('id'=> 15, 'doc_name' => 'Dr. Maria Rodin', 'gender' => 'Female', 'contact_no' => '(879) 461-4746',),
            array('id'=> 16, 'doc_name' => 'Dr. Edna Eggleston', 'gender' => 'Female', 'contact_no' => '(346) 210-9147',),
            array('id'=> 17, 'doc_name' => 'Dr. Erica Hedegore', 'gender' => 'Female', 'contact_no' => '(297) 898-7581',),
            array('id'=> 18, 'doc_name' => 'Dr. Lily Navedo', 'gender' => 'Female', 'contact_no' => '(973) 697-5108',),
            array('id'=> 19, 'doc_name' => 'Dr. Naomi Petric', 'gender' => 'Female', 'contact_no' => '(662) 387-7388',),
            array('id'=> 20, 'doc_name' => 'Dr. Roberto Villacana', 'gender' => 'Female', 'contact_no' => '(868) 223-7287',),

        );

        Doctor::insert($doctors);

    }
}
