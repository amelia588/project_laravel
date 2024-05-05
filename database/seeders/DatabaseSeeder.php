<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;  
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear 10 usuarios con datos generados aleatoriamente.
        User::factory(10)->create();

        // Crear un usuario específico.
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Crear un usuario utilizando el método estático ::create (asegúrate de que está protegido contra asignación masiva en el modelo).
        User::create([
            'name' => 'Amelia M',
            'email' => 'a@admin.com',
            'password' => bcrypt('123456')  // Usar bcrypt para encriptar la contraseña.
        ]);

        // Generar 24 posts usando la factory de Post.
        Post::factory(24)->create();
    }
}

