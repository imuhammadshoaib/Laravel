<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;
        $product->product_name = 'Earthen Bottle';
        $product->product_image = 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg';
        $product->product_price = 46;
        $product->product_desc = 'Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem..';
        $product->save();

        $product = new Product;
        $product->product_name = 'Nomad Tumbler';
        $product->product_image = 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg';
        $product->product_price = 35;
        $product->product_desc = 'Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem..';
        $product->save();

        $product = new Product;
        $product->product_name = 'Focus Paper Refill';
        $product->product_image = 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg';
        $product->product_price = 89;
        $product->product_desc = 'Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem..';
        $product->save();

        $product = new Product;
        $product->product_name = 'Machined Mechanical Pencil';
        $product->product_image = 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg';
        $product->product_price = 38;
        $product->product_desc = 'Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem..';
        $product->save();

        $product = new Product;
        $product->product_name = 'Focus Card Tray';
        $product->product_image = 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-05.jpg';
        $product->product_price = 64;
        $product->product_desc = 'Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem..';
        $product->save();

        $product = new Product;
        $product->product_name = 'Brass Scissors';
        $product->product_image = 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-07.jpg';
        $product->product_price = 50;
        $product->product_desc = 'Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem..';
        $product->save();

        $product = new Product;
        $product->product_name = 'Focus Carry Pouch';
        $product->product_image = 'https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-08.jpg';
        $product->product_price = 32;
        $product->product_desc = 'Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem..';
        $product->save();
    }
}
