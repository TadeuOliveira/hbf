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
                      'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);
        User::find(1)->roles()->sync([1,2,3]);

        User::create(['name'=>'Macos Vinicius',
                      'email'=>'marcos@vinicius.com',
                      'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);
        User::find(2)->roles()->sync([1,2,3]);

        User::create(['name'=>'A Publisher',
                      'email'=>'a@publisher.com',
                      'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi']);
        User::find(3)->roles()->sync([1,2,3]);

    }
}
