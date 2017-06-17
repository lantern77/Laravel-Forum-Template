<?php

use Illuminate\Database\Seeder;

class Reports extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            'id' => 1,
            'reason' => "This guy was a douche bag",
            'reporter_id' => 1,
            'post_id' => 1,
            'suspect_id' => 2,
            'reply_id' => null
        ]);
    }
}
