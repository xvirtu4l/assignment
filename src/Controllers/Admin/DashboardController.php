<?php

namespace Asm\Final\Controllers\Admin;

use Asm\Final\Models\Category;
use Asm\Final\Models\Product;
use Asm\Final\Commons\Controller;
use Asm\Final\Commons\Helper;

class DashboardController extends Controller
{   
    private Category $category;
    private Product $product;
    public function __construct()
    {
        $this->category = new Category();
        $this->product = new Product();
    }
    public function dashboard() {     
        $categories = $this->category->countByCategory();
        $products = $this->product->top8Items();
        $this->renderViewAdmin(__FUNCTION__ , [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}