<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 20/03/18
 * Time: 12:36
 */

namespace app\controllers;
use app\models\User;


class HomeController extends Controller
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function viewHome()
    {
        $viewData = [
            'users' => $this->user->listAllUsers(),
        ];

        return $this->view('home', $viewData);
    }

    public function viewDetail()
    {
        $user = $this->user->findOneId();

        if (count($user) > 0)
        {
            $viewData = [
                'user' => $user,
            ];

            return $this->view('detail', $viewData);
        }
        else{
            return redirect('404');
        }
    }

    public function viewCart()
    {
        return $this->view('cart');
    }
}