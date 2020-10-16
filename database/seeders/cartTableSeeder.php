<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Seeder;

class cartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Models\product ([
            'name' => 'Usman',
            'price' => '50.69',
            'description' => 'Not A Product',
            'image' => 'https://bit.ly/30Lsh3D'
        ]);
        $product->save();
    }
}
