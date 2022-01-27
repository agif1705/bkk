<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'konsol_id' => 1,
            'name' => 'agif',
            'username' => 'agif',
            'email' => 'agif@test.com',
            'password' => bcrypt(12345678),
            'token' => bcrypt('bundokargo'),
            'v_password' => 12345678,
        ]);
        
        $user->assignRole('SuperAdmin');

        $user = User::create([
            'konsol_id' => 1,
            'name' => 'adminkargo',
            'username' => 'adminkargo',
            'email' => 'adminkargo@test.com',
            'password' => bcrypt(12345678),
            'token' => bcrypt('bundokargo'),
            'v_password' => 12345678,
        ]);
        
        $user->assignRole('AdminKargo');

        $user = User::create([
            'konsol_id' => 1,
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@test.com',
            'password' => bcrypt(12345678),
            'token' => bcrypt('bundokargo'),
            'v_password' => 12345678,
        ]);
        
        $user->assignRole('AdminRetail');
        
        $user = User::create([
            'konsol_id' => 1,
            'name' => 'station',
            'username' => 'station',
            'email' => 'station@test.com',
            'password' => bcrypt(12345678),
            'token' => bcrypt('bundokargo'),
            'v_password' => 12345678,
        ]);
        
        $user->assignRole('Station');

        $user = User::create([
            'konsol_id' => 1,
            'name' => 'Kurir',
            'username' => 'Kurir',
            'email' => 'Kurir@test.com',
            'password' => bcrypt(12345678),
            'token' => bcrypt('bundokargo'),
            'v_password' => 12345678,
        ]);
        
        $user->assignRole('Kurir');

        $user = User::create([
            'konsol_id' => 1,
            'name' => 'Delete',
            'username' => 'Delete',
            'email' => 'Delete@test.com',
            'password' => bcrypt(12345678),
            'token' => bcrypt('bundokargo'),
            'v_password' => 12345678,
        ]);
        
        $user->assignRole('Delete');
    }
}
