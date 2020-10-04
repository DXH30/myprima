<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Finance',
                'description' => 'Finance',
                'deptauth' => '["1"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Procurement',
                'description' => 'Procurement',
                'deptauth' => '["2"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Developer',
                'description' => 'Developer',
                'deptauth' => '["3"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Sysadmin',
                'description' => 'Sysadmin',
                'deptauth' => '["4"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Operation',
                'description' => 'Operation',
                'deptauth' => '["5"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Admin',
                'description' => 'Admin',
                'deptauth' => '["6"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Billing',
                'description' => 'Billing',
                'deptauth' => '["7"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Project',
                'description' => 'Project',
                'deptauth' => '["8"]',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
