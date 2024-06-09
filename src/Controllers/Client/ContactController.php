<?php 

namespace Asm\Final\Controllers\Client;

use Asm\Final\Commons\Controller;

class ContactController extends Controller
{
    public function index() {


        $this->renderViewClient('contact');
    }

}