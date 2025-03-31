<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
        DB::insert('insert into category_product (category_id, product_id) values (?, ?)', [1, 1]);
        DB::insert('insert into category_product (category_id, product_id) values (?, ?)', [1, 2]);
        DB::insert('insert into category_product (category_id, product_id) values (?, ?)', [2, 1]);
        DB::insert('insert into category_product (category_id, product_id) values (?, ?)', [2, 2]);
        DB::insert('insert into category_product (category_id, product_id) values (?, ?)', [2, 3]);
        DB::insert('insert into category_product (category_id, product_id) values (?, ?)', [3, 1]);
        DB::insert('insert into category_product (category_id, product_id) values (?, ?)', [3, 2]);
    }
}
