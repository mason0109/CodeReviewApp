<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User;
        $u->name = 'Amy';
        $u->username = 'masonii';
        $u->email = 'mason@email.com';
        $u->type = 'admin';
        $u->password = 'password';
        $u->save();
        
        $users = User::factory()->count(10)->create();
    }
}
