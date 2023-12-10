<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Pacote;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Descomente a linha abaixo se estiver usando factories
        // \App\Models\User::factory(10)->create();

        // Criação do usuário administrador
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'acesso' => 'A',
            'password' => bcrypt('0987654321'),
        ]);

        // Criação do usuário operacional
        User::create([
            'name' => 'operacional',
            'email' => 'operacional@operacional.com',
            'acesso' => 'O',
            'password' => bcrypt('0987654321'),
        ]);

        // Criação do usuário comercial
        User::create([
            'name' => 'comercial',
            'email' => 'comercial@comercial.com',
            'acesso' => 'C',
            'password' => bcrypt('0987654321'),
        ]);

        Pacote::create([
            'comidas' => "Jantar Completo, Diversas Sobremesas",
            'bebidas' => "Cevejas ,  Refrigerantes",
            'preco_pessoa' => 70.00
        ]);
        Pacote::create([
            'comidas' => "Comida Japonesa",
            'bebidas' => "Diversos Sucos",
            'preco_pessoa' => 50.00
        ]);

        // Adicione mais comandos de criação de registros, se necessário
    }
}
