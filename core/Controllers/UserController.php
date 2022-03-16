<?php

namespace Controllers;

use Models\Categories;
use Models\User;

class UserController extends BaseController
{
    public function register()
    {
        return view('register');
    }

    public function registerPost()
    {
        if($_POST['passsword'] != $_POST['passsword_confirmed'])
            return header('Location: ?error_password');
        unset($_POST['passsword_confirmed']);
        $user = new User();
        $findUser = $user->create($_POST);
        return var_dump($findUser);
    }
    public function login()
    {
        return view('login');
    }

    public function loginpost()
    {
        $users = new User();
        $arr = [
            ['login', '=', $_POST['login']],
            ['passsword', '=', $_POST['passsword']]
        ];
        $users = $users->where($arr)->get();
        if(count($users)>0){
            return var_dump($users);
        }
    }

    public function category()
    {
        return view('category');
    }

    public function categorypost()
    {
        $categories = new Categories();
        $findcategories = $categories->create($_POST);
        return var_dump($findcategories);
    }

   public function categoryread()
    {
        return view('categoryread');
    }

    public function delete()
    {
        if(isset($_POST["id"]))
        {
            $conn = new Categories();

            $userid = mysqli_real_escape_string($conn, $_POST["id"]);
            $sql = "DELETE FROM categories WHERE id = '$userid'";
            if(mysqli_query($conn, $sql)){

                header("Location: categoryread");
            } else{
                echo "Ошибка: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }

    public function update()
    {
        
    }
}