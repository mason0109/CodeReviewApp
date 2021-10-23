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
        $u->username = "masoni";
        $u->email = "986832@swansea.ac.uk";
        $u->password = "password";
        $u->save();
    }
}
