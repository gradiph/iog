<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
			'code' => 'BL1001',
			'name' => 'Akasia Blouse',
			'detail' => 'Color : White
						Material : Cotton + Polyester
						Size : Free (S to M)
						Designed by Korea',
			'qty' => '3',
			'price' => '119000',
			'image' => 'BL1001_170707071200.jpg',
		]);
        Product::create([
			'code' => 'DR1001',
			'name' => 'Baramkot Dress',
			'detail' => 'Color : SkyBlue
						Material : Cotton + Polyester
						Size : Free SIZE (S to M)
						Designed by Korea',
			'qty' => '1',
			'price' => '159000',
			'image' => 'DR1001_170707071200.jpg',
		]);
        Product::create([
			'code' => 'BS1001',
			'name' => 'Flower Top Bustier',
			'detail' => 'Color : Green, Blue, Navy, Beige
						Material : Polyester
						Size : Free SIZE (S to M)
						Made in Korea',
			'qty' => '4',
			'price' => '99000',
			'image' => 'BS1001_170707071200.jpg',
		]);
        Product::create([
			'code' => 'DR1002',
			'name' => 'Cageunkot Dress',
			'detail' => 'Color : Navy
						Material : Cotton + Polyester
						Size : Free SIZE (S to M)
						Designed by Korea',
			'qty' => '1',
			'price' => '159000',
			'image' => 'DR1002_170707071200.jpg',
		]);
        Product::create([
			'code' => 'BL1002',
			'name' => 'Beri Blouse',
			'detail' => 'Color : White
						Material : Cotton + Polyester
						Size : Free SIZE (S to M)
						Designed by Korea',
			'qty' => '2',
			'price' => '119000',
			'image' => 'BL1002_170707071200.jpg',
		]);
    }
}
