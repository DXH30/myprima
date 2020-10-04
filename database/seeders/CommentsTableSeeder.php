<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'threadid' => 1,
                'userid' => 2,
                'replyto' => NULL,
                'content' => '<p>Percobaan ini adalah yang pertama</p>',
                'created_at' => '2020-10-04 12:11:44',
                'updated_at' => '2020-10-04 12:11:44',
            ),
        ));
        
        
    }
}
