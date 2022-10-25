<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Farmer;
use App\Models\Products;
use Illuminate\Database\Seeder;

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
        
        Farmer::factory(5)->create();
        Products::create([
            'product_name' => 'Apples',
            'product_tags' => 'fruits',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Oranges',
            'product_tags' => 'fruits',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Apples',
            'product_tags' => 'fruits',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Oranges',
            'product_tags' => 'fruits',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Apples',
            'product_tags' => 'fruits',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Oranges',
            'product_tags' => 'fruits',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Apples',
            'product_tags' => 'fruits',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Oranges',
            'product_tags' => 'fruits',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Apples',
            'product_tags' => 'fruits',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Oranges',
            'product_tags' => 'fruits',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Repolyo',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Carrots',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Repolyo',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Carrots',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Repolyo',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Carrots',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Repolyo',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Carrots',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Repolyo',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Carrots',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Repolyo',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        Products::create([
            'product_name' => 'Carrots',
            'product_tags' => 'vegetables',
            'product_quantity' => '300',
            'product_price' => '500',
        ]);
        // Listing::create([
        //     'title' => 'Laravel Senior Developer', 
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);
    }
}
