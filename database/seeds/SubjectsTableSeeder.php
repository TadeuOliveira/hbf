<?php

use App\Subject;
use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Subject::create(['name'=>'band']);
        Subject::create(['name'=>'show']);
        Subject::create(['name'=>'release']);
    }
}
