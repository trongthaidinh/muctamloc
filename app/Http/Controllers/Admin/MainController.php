<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Message;
use App\Models\News;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();  // Fetch total users
        $totalProducts = Product::count();  // Fetch total products
        $totalOrders = Cart::count();  // Fetch total orders
        $totalFeedback = Message::count();  // Fetch total feedback
        $totalCustomers = Customer::count();  // Fetch total customers
        $totalNews = News::count();  // Fetch total news
        $totalBanners = Banner::count();  // Fetch total banners
        $totalCategories = Category::count();  // Fetch total categories

        return view('admin.home', [
            'title' => 'Trang Quản Trị',
            'totalUsers' => $totalUsers,
            'totalProducts' => $totalProducts,
            'totalOrders' => $totalOrders,
            'totalFeedback' => $totalFeedback,
            'totalCustomers' => $totalCustomers,
            'totalNews' => $totalNews,
            'totalBanners' => $totalBanners,
            'totalCategories' => $totalCategories,
        ]);
    }
}
