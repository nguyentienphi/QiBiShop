<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\TypeProduct;
use App\Model\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.header', function($view){
            $parent = TypeProduct::where('id_parent',0)->get();
            $type = TypeProduct::where('id_parent', '!=', 0)->get();
            $view->with(['parent' => $parent, 'type' => $type]);
        });

        view()->composer('layouts.header', function($view){
            if(Session::has('cart'))
            {
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);             
                $view->with(['cart' => Session::get('cart'), 'product_cart' => $cart->items, 'toltalPrice' => $cart->totalPrice, 'totalQuanty' => $cart->totalQuanty]);
            }

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
