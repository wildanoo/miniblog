<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profile;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'budi',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('budi123'),
            'admin' => 1
        ]);

        Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatar/avatar1.png',
            'about' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error debitis doloremque sequi, nostrum quasi vel id recusandae modi fugiat. Distinctio consequuntur amet suscipit blanditiis tempore accusamus atque! Qui, sunt optio.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
