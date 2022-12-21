<?php

declare(strict_types=1);

namespace Controllers;

class Authentication implements Icontrollers
{
    public function startcontroller($function) :void
    {
        
        $data = $this->$function();
        include '../views/template.php';
    }

    public function default()
    {
        echo 'default';
    }

    public function loginT()
    {
        $user = new \Models\Users();

        if(!empty($_POST['email']) && !empty($_POST['password']))
        {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $value = $user->login($email, $password);
            
            if(!empty($value))
            {
                $_SESSION['user'] = $value;
                header('Location: /');
            }
            else
            {
                header('Location: /authentication/login');
            }
        }
    }

    public function login() :array
    {
        include '../views/login.php';
        return [
            'title' => 'Login',
            'content' => $content,
        ];

    }

    public function registerT()
    {
        $user = new \Models\Users();

        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['nickname']) && !empty($_POST['email']) && !empty($_POST['password']))
        {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $nickname = htmlspecialchars($_POST['nickname']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $user->add($firstname, $lastname, $nickname, $email, $password);
            header('Location: /authentication/login');
        }
    }

    public function register() :array
    {
        include '../views/register.php';
        return [
            'title' => 'Register',
            'content' => $content,
        ];
    }
    
    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: /');
    }
}