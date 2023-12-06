<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin'.'@admin.com',
            'password' => '0987654321',
            'acesso' => 'A'
        ]);

        DB::table('users')->insert([
            'name' => 'operacional',
            'email' => 'operacional'.'@operacional.com',
            'password' => '0987654321',
            'acesso' => 'O'
        ]);

        DB::table('users')->insert([
            'name' => 'comercial',
            'email' => 'comercial'.'@comercial.com',
            'password' => '0987654321',
            'acesso' => 'C'
        ]);

    }
}
