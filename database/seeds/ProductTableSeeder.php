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
        $product=[
        	['product_name'=>'Casual Shirt',
        	 'product_price'=>'1250',
        	 'product_sku'=>'0DW10',
        	 'product_image'=>'pro_image_1.png',
        	 'product_description'=>'White Shirt'

        	],
        	['product_name'=>'Jeans Denim',
        	 'product_price'=>'2050',
        	 'product_sku'=>'0DWER',
        	 'product_image'=>'pro_image_2.png',
        	 'product_description'=>'Blue '

        	],
            ['product_name'=>'Shoe',
             'product_price'=>'1400',
             'product_sku'=>'0342',
             'product_image'=>'pro_image_3.jpg',
             'product_description'=>'Brown '

            ],
            ['product_name'=>'Pant',
             'product_price'=>'1000',
             'product_sku'=>'568R',
             'product_image'=>'pro_image_4.png',
             'product_description'=>'Blue & Black '

            ],
            ['product_name'=>'Pant',
             'product_price'=>'1000',
             'product_sku'=>'568R',
             'product_image'=>'pro_image_5.png',
             'product_description'=>'Blue & Black '

            ],

        ];
        foreach ($product as $key => $value) {
        	DB:: table('product')->insert([
        		$key=>$value]);
        }
    }
}