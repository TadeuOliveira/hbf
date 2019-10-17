<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Tadeu Oliveira',
                      'email'=>'tadeu@oliveira.com',
                      'password'=>'password'])
        ->roles()->sync([1,2,3]);
        User::create(['name'=>'Macos Vinicius',
                      'email'=>'marcos@vinicius.com',
                      'password'=>'password'])
        ->roles()->sync([1,2]);
        User::create(['name'=>'A Publisher',
                      'email'=>'a@publisher.com',
                      'password'=>'password'])
        ->roles()->sync([2]);
    }
}
