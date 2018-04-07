<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $product = new \App\Product([
            'imgPath' => 'https://images-na.ssl-images-amazon.com/images/I/71zmGqgsmGL._AC_SR201,266_.jpg',
            'title' => 'Linon Tavern Table Set',
            'description' => 'Linon Tavern Collection 3-Piece Table Set',
            'price' => 109
        ]);
        $product->save();
        $product = new \App\Product([
            'imgPath' => 'https://images-na.ssl-images-amazon.com/images/I/41iQhFTx5iL._AC_US160_.jpg',
            'title' => 'Mecor Dining Set',
            'description' => 'Mecor Dining Set Glass Top Table with Leather Chairs Kitchen Breakfast Furniture Black (5 PC)',
            'price' => 190
        ]);
        $product->save();
        $product = new \App\Product([
            'imgPath' => 'https://images-na.ssl-images-amazon.com/images/I/41BJUhPN0IL._AC_US160_.jpg',
            'title' => 'Zinus Farmhouse Dining Table',
            'description' => 'Zinus Farmhouse Dining Table with Two Benches / 3 piece set',
            'price' => 195
        ]);
        $product->save();
        $product = new \App\Product([
            'imgPath' => 'https://images-na.ssl-images-amazon.com/images/I/41klxJnierL._AC_US160_.jpg',
            'title' => 'Dorel Living 3-Piece Devyn Faux',
            'description' => 'Dorel Living 3-Piece Devyn Faux Marble Pub Dining Set',
            'price' => 210
        ]);
        $product->save();
        $product = new \App\Product([
            'imgPath' => 'https://images-na.ssl-images-amazon.com/images/I/51YVoLEbiIL._AC_US160_.jpg',
            'title' => 'EcoDecors Satori 35in Teak Dining Table',
            'description' => 'EcoDecors Satori 35in Teak Dining Table and 2 Solid Teak Folding Chair Set',
            'price' => 222
        ]);
        $product->save();
    }
}
