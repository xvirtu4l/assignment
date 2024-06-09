<?php 

namespace Asm\Final\Controllers\Client;

use Asm\Final\Commons\Controller;

class AboutController extends Controller
{
    public function index() {
        $this->renderViewClient('about');
    }
}