<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create();
        \App\Models\User::create([
            'name' => 'El nombre Del usuario Nuevo',
            'email' => 'correo@correo.com',
            // metodo de encriptacion para la contraseña
            'password' => bcrypt('123456')
        ]);
        \App\Models\Post::factory(80)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}