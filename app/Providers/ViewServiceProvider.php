<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Illuminate\Support\Facades;
use App\Models\Category;
use App\Models\Origin;
use App\Models\Brand;
use App\Models\Product;
use DB;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Facades\View::composer(['frontend.layout.master','frontend.shop','frontend.product'], function (View $view) {
            $categories = Category::where('parent_id',0)->get();
            $origins = Origin::all();
            $brands = Brand::limit(8)->get();

            $sevenDaysAgo = now()->subDays(7);
            $topProducts = Product::select('products.*', DB::raw('SUM(order_product.quantity) as totalSold'))
                    ->join('order_product', 'products.id', '=', 'order_product.product_id')
                    ->join('orders', 'order_product.order_id', '=', 'orders.id')
                    ->where('orders.created_at', '>=', $sevenDaysAgo)
                    ->groupBy('products.id')
                    ->orderByDesc('totalSold')
                    ->limit(3)
                    ->get();

            $view->with(compact('categories','origins','brands','topProducts'));
        });
    }
}
