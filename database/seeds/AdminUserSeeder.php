<?php

use Illuminate\Database\Seeder;

use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Admin Diring Lesson',
            'email' => 'diringlesson@gmail.com',
            'password' => bcrypt('lesson135'),
            // 'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');  // laravel permmision
    }
}