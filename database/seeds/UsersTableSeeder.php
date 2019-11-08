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
        factory(User::class)->create([
            'name'  => 'Ariel Salvador',
            'email' => 'ariel@buildawow.com',
            'password' => bcrypt('arieleslaonda')
        ]);

        factory(User::class)->create([
            'name'  => 'Christian Saravia',
            'email' => 'christian@buildawow.com',
            'password' => bcrypt('arieleslaonda')
        ]);

        factory(User::class)->create([
            'name'  => 'Steven Klose',
            'email' => 'sklose@synqauto.com',
            'password' => bcrypt('arieleslaonda')
        ]);
    }
}
