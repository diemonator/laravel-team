<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'gosho',
            'email' => 'gosho@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        factory(App\User::class,10)->create();
        factory(App\Content::class, 20)->create();
    }
}
