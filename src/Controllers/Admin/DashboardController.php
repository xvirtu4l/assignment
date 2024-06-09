<?php

namespace Asm\Final\Controllers\Admin;

use Asm\Final\Commons\Controller;
use Asm\Final\Commons\Helper;

class DashboardController extends Controller
{
    public function dashboard() {        
        $this->renderViewAdmin(__FUNCTION__);
    }
}