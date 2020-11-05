<?php

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
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Super Admin',
            'phone' => '01700-000000',
            'email' => 'super.admin@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('super.admin@email.com'),
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Site Administrator',
            'email' => 'site.admin@email.com',
            'phone' => '01700-000000',
            'email_verified_at' => now(),
            'password' => bcrypt('site.admin@email.com'),
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'role_id' => 3,
            'name' => 'Content Writer',
            'phone' => '01700-000000',
            'email' => 'content.writer@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('content.writer@email.com'),
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'role_id' => 4,
            'name' => 'Editor',
            'phone' => '01700-000000',
            'email' => 'editor@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('editor@email.com'),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'role_id' => 5,
            'name' => 'Moderator',
            'phone' => '01700-000000',
            'email' => 'moderator@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('moderator@email.com'),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'role_id' => 6,
            'name' => 'Subscriber',
            'phone' => '01700-000000',
            'email' => 'subscriber@email.com',
            'email_verified_at' => now(),
            'password' => bcrypt('subscriber@email.com'),
            'remember_token' => Str::random(10),
        ]);

//        factory(App\User::class, 20)->create();
    }
}
