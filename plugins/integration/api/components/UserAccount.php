<?php
/**
 * Created by PhpStorm.
 * User: Ludovic
 * Date: 31-03-17
 * Time: 22:25
 */

namespace Integration\API\Components;

use Backend\Behaviors\FormController;
use Cms\Classes\CodeBase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use RainLab\User\Components\Account as Account;

use RainLab\User\Models\User;

class UserAccount
{

    /**
     * Creates user using RainLab.User methods.
     *
     * @var mixed requestData (public)
     * @var String name, surname, username, password, password_confirmation, email
     * @return int newly made local user_id (credentials)
     */
    public static function createUserAccount($user)
    {
        if ($user['name']
            && $user['surname']
            && $user['email']
        ) {


            $now = date('Y-m-d H:i:s');
            $username = $user['name'] . '.' . $user['surname'];
            $password = bin2hex(openssl_random_pseudo_bytes(4));
            $persist_code = bin2hex(openssl_random_pseudo_bytes(4));

            $newUser = new User();
            $newUser->name = $user['name'];
            $newUser->surname = $user['surname'];
//            $newUser->login = $username;
            $newUser->username = $username;
            $newUser->email = $user['email'];
            $newUser->password = $password;
            $newUser->password_confirmation = $password;

            $newUser->persist_code = $persist_code;

            $newUser->created_at = $now;
            $newUser->updated_at = $now;
            $newUser->activated_at = $now;
            $newUser->is_activated = 1;
            $newUser->timezone_id = 1;

            //@todo: set permission once permissions added (through frontend plugin)


            //@todo: send comfirmation mail with random password included
            if ($newUser->save())
            {
                //send mail
                return $newUser->id;
            }
        }
        return false;
    }

    public static function deleteUserAccount($id)
    {
        // niet mooiste oplossing.. fucking hooks da ni werken maa fuckit
        $userAccount = User::find($id);
        if (!empty($userAccount))
        {
            $userAccount->is_activated = 0;
            $userAccount->deleted_at = date('Y-m-d H:i:s');
            if ($userAccount->save())
                return true;


//            return DB::table('users')->where('id', '=', $id)->update(['username' => null, 'is_activated' => 0, 'deleted_at' => date('Y-m-d H:i:s')]);

        }
        return false;
    }
}