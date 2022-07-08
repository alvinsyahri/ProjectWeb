<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'T-Shirt',
            'merek' => 'Jeans'
        ]);

        Category::create([
            'name' => 'Polo',
            'merek' => 'Puma'
        ]);

        Category::create([
            'name' => 'Kemeja',
            'merek' => 'Erigo'
        ]);

        Barang::factory(20)->create();

        User::factory(3)->create();
    }
}
