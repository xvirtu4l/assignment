<?php

namespace Asm\Final\Controllers\Client;

use Asm\Final\Commons\Controller;
use Asm\Final\Models\Product;
use Asm\Final\Models\Category;

class ProductController extends Controller
{
    private Product $product;
    private Category $category;

    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }

    public function index()
    {
        [$products, $totalPage] = $this->product->paginateProducts($_GET['page'] ?? 1);
        $categories = $this->category->all();
        $this->renderViewClient('products', [
            'products' => $products,
            'categories' => $categories,
            'totalPage' => $totalPage
        ]);
    }

    public function detail($id)
    {
        $product = $this->product->findByID($id);

        $this->renderViewClient('product-detail', [
            'product' => $product
        ]);
    }

}