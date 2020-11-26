<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::factory(10)->create();
        $user = User::find(1);
        $user->name = 'blog';
        $user->email = 'test@gmail.com';
        $user->password = bcrypt('test');
        $user->save();
    }
}
