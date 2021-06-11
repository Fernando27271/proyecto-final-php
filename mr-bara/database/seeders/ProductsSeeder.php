<?php

namespace Database\Seeders;

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
        \DB::table('products')->insert([
            'name' => 'Funda Portalaptop Onelia',
            'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
            'photo' => 'images/product/product-2.jpg',
            'price' => 68.00
        ]);

        \DB::table('products')->insert([
            'name' => 'Mochila Amalia',
            'description' => 'A brand new, sealed Lilac Purple Verizon Global Unlocked Galaxy S9 by Samsung. This is an upgrade. Clean ESN and activation ready.',
            'photo' => 'images/product/product-3.jpg',
            'price' => 698.88
        ]);

        \DB::table('products')->insert([
            'name' => 'Cartera Emilia',
            'description' => 'New condition • No returns, but backed by eBay Money back guarantee',
            'photo' => 'images/product/product-4.jpg',
            'price' => 675.00
        ]);

        \DB::table('products')->insert([
            'name' => 'Mochila Cluny',
            'description' => 'New condition • No returns, but backed by eBay Money back guarantee',
            'photo' => 'images/product/product-5.jpg',
            'price' => 635.00
        ]);

        \DB::table('products')->insert([
            'name' => 'Lonchera Sahir',
            'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
            'photo' => 'images/product/product-6.jpg',
            'price' => 68.00
        ]);

        \DB::table('products')->insert([
            'name' => 'Mochila Loretto',
            'description' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
            'photo' => 'images/product/product-7.jpg',
            'price' => 159.99
        ]);

        \DB::table('products')->insert([
            'name' => 'Billetera Wald',
            'description' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
            'photo' => 'images/product/product-8.jpg',
            'price' => 129.99
        ]);

        \DB::table('products')->insert([
            'name' => 'Mochila Dobson',
            'description' => 'New condition • No returns, but backed by eBay Money back guarantee',
            'photo' => 'images/product/product-9.jpg',
            'price' => 635.00
        ]);

        \DB::table('products')->insert([
            'name' => 'Cartera Jenne',
            'description' => 'The device is in good cosmetic condition and will show minor scratches and/or scuff marks.',
            'photo' => 'images/product/product-36.jpg',
            'price' => 129.99
        ]);

        \DB::table('products')->insert([
            'name' => 'Billetera Ender',
            'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
            'photo' => 'images/product/product-37.jpg',
            'price' => 68.00
        ]);

        \DB::table('products')->insert([
            'name' => 'Cartera Aurelia',
            'description' => 'NETWORK Technology GSM. Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0.59 W/kg (head).',
            'photo' => 'images/product/product-38.jpg',
            'price' => 159.99
        ]);

        \DB::table('products')->insert([
            'name' => 'Maleta Dura Cardiff 28 ',
            'description' => 'GSM & CDMA FACTORY UNLOCKED! WORKS WORLDWIDE! FACTORY UNLOCKED. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X with iOS 11.',
            'photo' => 'images/product/product-39.jpg',
            'price' => 983.00
        ]);
    }
}
