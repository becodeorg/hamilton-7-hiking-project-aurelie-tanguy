<?php

declare(strict_types=1);

class Authentication implements Icontrollers
{
    public function startcontroller($function) :void
    {
        
        $this->$function();
        include '../views/template.php';
    }

    public function default()
    {
        echo 'default';
    }

    public function login()
    {
        $user = new Users();

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

    public function register()
    {
        $user = new Users();

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

    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: /');
    }
}