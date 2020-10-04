<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'deptid' => 8,
                'groupid' => 1,
                'name' => 'admin',
                'email' => 'admin@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1bhJh2G84VKgwz3MlFpzaOlr1PAGTPT.kHu6aHGuLLfZ0NYZpPB9.',
                'remember_token' => NULL,
                'deptauth' => '["8","1","2","3","4","5","6","7"]',
                'created_at' => '2020-10-04 07:11:37',
                'updated_at' => '2020-10-04 07:11:37',
            ),
            1 => 
            array (
                'id' => 2,
                'deptid' => 3,
                'groupid' => NULL,
                'name' => 'dhs0223',
                'email' => 'dhs0223@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NiZYCLklSr1nWz2N4wxO8eZnVDVLANgC1NsNUgCBKW1MSIVxgVIUK',
                'remember_token' => NULL,
                'deptauth' => '["3"]',
                'created_at' => '2020-10-04 12:08:38',
                'updated_at' => '2020-10-04 12:08:38',
            ),
        ));
        
        
    }
}
