<?php

namespace MyApp\Controllers\Home;

session_start();

use MyApp\Helper\Tool\StringDifferent;
use MyApp\Http\HttpResponse\Response;
use MyApp\QueryBuilder\AppQuery\Query;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

class LoginController
{
    /**
     * @param object $request
     * @return void
     */
    public function login(object $request): void
    {
        $str = new StringDifferent();
        $sql = "SELECT user_id, username, password, gender, role FROM user_tb WHERE username =:username AND password =:password";

        $query = (new Query())->select($sql, [
            'username' => $str->clean($request->username),
            'password' => $str->clean($request->password)
        ]);

        if (count($query) > 0) {
            
            $_SESSION['user_id'] = $query[0]->user_id;
            $_SESSION['username'] = $query[0]->username;
            $_SESSION['password'] = $query[0]->password;
            $_SESSION['gender'] = $query[0]->gender;
            $_SESSION['role'] = $query[0]->role;

            Response::success();
        } else {
            Response::error();
        }
    }
}


