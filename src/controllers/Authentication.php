<?php

declare(strict_types=1);

namespace Controllers;

class Authentication implements Icontrollers
{
    public function startController($function,$arg) :void
    {
        
        $data = $this->$function($arg);
        include '../views/template.php';
    }

    public function default($arg)
    {
        return $this->login($arg);
    }

    public function loginT($arg)
    {
        $user = new \Models\Authentication();

        if(!empty($_POST['email']) && !empty($_POST['password']))
        {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $value = $user->login($email);
            
            if(!empty($value))
            {
                if(!password_verify($password, $value['password']))
                {
                    header('Location: /authentication/login');
                }
                $_SESSION['user'] = $value;
                header('Location: /');
            }
            else
            {
                header('Location: /authentication/login');
            }
        }
        else
        {
            header('Location: /authentication/register');
        }
    }

    public function login($arg) :array
    {
        include '../views/Authentication/login.php';
        return [
            'title' => 'Login',
            'content' => $content,
        ];

    }

    public function registerT($arg)
    {
        $user = new \Models\Authentication();

        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['nickname']) && !empty($_POST['email']) && !empty($_POST['password']))
        {
            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $nickname = htmlspecialchars($_POST['nickname']);
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if ($user->register($firstname, $lastname, $nickname, $email, $password))
            {
                header('Location: /authentication/login');
            }
            else
            {
                header('Location: /authentication/register');
            }
        }
        else
        {
            header('Location: /authentication/login');
        }
    }

    public function register($arg) :array
    {
        include '../views/Authentication/register.php';
        return [
            'title' => 'Register',
            'content' => $content,
        ];
    }
    
    public function logout($arg)
    {
        unset($_SESSION['user']);
        header('Location: /');
    }
}