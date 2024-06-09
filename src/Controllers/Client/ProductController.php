<?php 

namespace Asm\Final\Controllers\Client;

use Asm\Final\Commons\Controller;
use Asm\Final\Models\Product;

class ProductController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {

        $products = $this->product->all();

        $this->renderViewClient('products', [
            'products' => $products
        ]);
    }

    public function detail($id) {
        $product = $this->product->findByID($id);

        $this->renderViewClient('product-detail', [
            'product' => $product
        ]);
    }
}