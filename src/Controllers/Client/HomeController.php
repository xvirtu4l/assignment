<?php 

namespace Asm\Final\Controllers\Client;

use Asm\Final\Commons\Controller;
use Asm\Final\Commons\Helper;
use Asm\Final\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {

        $products = $this->product->top8();

        $this->renderViewClient('home', [
            'products' => $products
        ]);
    }
}