<?php

namespace Database\Seeders;
use App\Models\Forms;
use Illuminate\Support\Facades\Hash;

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
        Forms::factory()->create([
            'id'=>'4',
            'nome'=> 'gabriel2',
            'senha'=> Hash::make('12345'),
            'status'=>'d'

        ]);
        Forms::factory()->create([
            'id'=>'10',
            'nome'=> 'gabriel3',
            'senha'=> Hash::make('12345'),
            'status'=>'o'

        ]);
    }
}
