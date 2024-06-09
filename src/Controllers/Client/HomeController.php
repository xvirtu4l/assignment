<?php 

namespace Asm\Final\Controllers\Client;

use Asm\Final\Commons\Controller;
use Asm\Final\Commons\Helper;
use Asm\Final\Models\Category;
use Asm\Final\Models\Product;

class HomeController extends Controller
{
    private Product $product;
    private Category $category;

    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }
    
    public function index() {

        $products = $this->product->top8();
        $categories = $this->category->all();
        $this->renderViewClient('home', [
            'products' => $products,
            'category' => $categories
        ]);
    }
}