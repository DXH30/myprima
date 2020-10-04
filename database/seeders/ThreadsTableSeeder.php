<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('threads')->delete();
        
        \DB::table('threads')->insert(array (
            0 => 
            array (
                'id' => 1,
                'userid' => 2,
                'title' => 'Percobaan',
                'content' => '<p>The quick brown fox jumped over the lazy dogs&nbsp;&nbsp;&nbsp;&nbsp;</p>',
                'description' => 'Percobaan satu',
                'deptauth' => '["1","2","3","4","5","6","7"]',
                'deptid' => 3,
                'created_at' => '2020-10-04 12:09:24',
                'updated_at' => '2020-10-04 12:09:24',
            ),
        ));
        
        
    }
}
