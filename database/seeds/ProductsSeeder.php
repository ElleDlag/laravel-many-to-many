<?php

use App\User;
use App\Product;
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
       factory(Product::class, 100)
               -> create()
               -> each(function($product){
                   $usrs = User::inRandomOrder() -> take(rand(0,8))->get();
                   $product -> users() -> attach($usrs);
       });
   }

}
