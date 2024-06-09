<?php

namespace Asm\Final\Controllers\Admin;

use Asm\Final\Commons\Controller;
use Asm\Final\Commons\Helper;
use Asm\Final\Models\Category;

class CategoryController extends Controller
{
    private Category $category;
    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $category = $this->category->all();

        $this->renderViewAdmin('categories.index', [
            'categories' => $category
        ]);
    }

    public function show($id)
    {
        $category = $this->category->findByID($id);

        $this->renderViewAdmin('categories.show', [
            'category' => $category
        ]);
    }
}