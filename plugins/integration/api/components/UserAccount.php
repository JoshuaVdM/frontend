<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 31-03-17
 * Time: 22:25
 */

namespace Integration\API\Components;

use Cms\Classes\CodeBase;
use RainLab\User\Components\Account as Account;

class UserAccount extends Account
{
    public $requestData;

    public function onRegister() {
        //Do anything you need to do


        //$this['username'] = $this->request->username;
        $_POST['name'] = $this->requestData['name'];
        $_POST['surname'] = $this->requestData['surname'];
        $_POST['username'] = $this->requestData['username'];
        $_POST['password'] = $this->requestData['password'];
        $_POST['password_confirmation'] = $this->requestData['password_confirmation'];
        $_POST['email'] = $this->requestData['email'];

        //return (array)post();

        parent::onRegister();

        $user = $this->user(); // This is the user that was just created, here for example, dont need to assign it really
        // Now you can do stuff with any of the variables that were generated (such as user above)

        return $user->id;
    }
}