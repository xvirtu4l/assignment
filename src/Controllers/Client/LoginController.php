<?php 

namespace Asm\Final\Controllers\Client;

use Asm\Final\Commons\Controller;
use Asm\Final\Commons\Helper;
use Asm\Final\Models\User;

class LoginController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function showFormLogin() {
        avoid_login();

        $this->renderViewClient('login');
    }

    public function login() {
        avoid_login();

        try {
            $user = $this->user->findByEmail($_POST['email']);

            if (empty($user)) {
                throw new \Exception('Email not exists: ' . $_POST['email']);
            }
            
            
            
            $flag = password_verify($_POST['password'], $user['password']);
            
            if ($flag) {

                $_SESSION['user'] = $user;

                if ($user['type'] == 'admin') {
                    header('Location: ' . url('admin') );
                    exit;
                }
                
                header('Location: ' . url() );
                exit;
            }

            throw new \Exception('Incorrect Password');
        } catch (\Throwable $th) {
            $_SESSION['error'] = $th->getMessage();

            header('Location: ' . url('login') );
            exit;
        }
    }

    public function logout() {
        unset($_SESSION['user']);

        header('Location: ' . url() );
        exit;
    }
}