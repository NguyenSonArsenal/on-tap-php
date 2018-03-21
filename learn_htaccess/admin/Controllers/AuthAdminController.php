<?php

namespace admin\Controllers;

use Library\Session;
use Library\Cookie;

class AuthAdminController
{
    public static function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $email      =   isset($_POST['email']) ?
                            trim(clear_input($_POST['email']))     :  '';

            $username   =   isset($_POST['username']) ?
                            trim(clear_input($_POST['username']))  :  '';

            $errors = [];

            if ($email == '')
                $errors['email']    = 'Email is required';
            if ($username == '')
                $errors['username'] = 'Username is required';

            if (empty($errors))
            {
                $users = UserController::allUser();

                $admin = 'admin';
                $emailAdmin = '';

                foreach ($users as $user)
                {
                    if ($user['name'] === $admin)
                    {
                        $emailAdmin = $user['email'];
                        $admin_id = $user['id'];
                        break;
                    }
                }

                if ($username === $admin && $email === $emailAdmin)
                {
                    Session::put('username', $username);
                    Session::put('admin_id', $admin_id);
                    Session::put('admin_logged', 1);
                    Cookie::make('username', $username, time()+31556926); // set a year variable cookie

                    return redirect('./module/user/index');
                }
                else
                {
                    $html = "<script>alert('Wrong login or password');</script>";
                    $html .= "<noscript>Wrong login or password</noscript>";

                    return $html;
                }
            }
            else
            {
                return [
                    'errors'    => $errors,
                    'username'  => $username,
                    'email'     => $email
                ];
            }
        }
    }

    public static function logout()
    {
        if (isset($_SESSION['username']))
        {
            Session::put('username', '');
            Session::put('admin_id', 0);
            Session::put('admin_logged', 0);
        }

        return redirect('/admin/views/login');
    }
}