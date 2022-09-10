<?php

namespace MyApp\Controllers\Home;

use MyApp\Helper\Tool\StringDifferent;
use MyApp\Http\HttpResponse\Response;
use MyApp\QueryBuilder\AppQuery\Query;

require_once dirname(__DIR__) . ('../../../../bloodDonationProjectCS60/MyApp/Include/Autoload.php');

class RegisterController
{
    /**
     * @param object $request
     * @return void
     */
    public function register(object $request): void
    {
        $role = 'user';
        $sql = "";
        $sql .= "INSERT INTO user_tb(username, password, firstname, lastname, gender, dateOfBirth, bloodType, weight, height, address, subDistrict, road, district, province, postCode, idCard, email, phoneNumber, role)";
        $sql .= " VALUES(:username, :password, :firstname, :lastname, :gender, :dateOfBirth, :bloodType, :weight, :height, :address, :subDistrict, :road, :district, :province, :postCode, :idCard, :email, :phoneNumber, :role)";

        $str = new StringDifferent();
        $checkUsernameAsPassword = $this->validateUsernameAsPassword($str->clean($request->username), $str->clean($request->password));

        if (!$checkUsernameAsPassword) {

            $query = (new Query())->insert($sql, [
                'username' => $str->clean($request->username),
                'password' => $str->clean($request->password),
                'firstname' => $str->clean($request->firstname),
                'lastname' => $str->clean($request->lastname),
                'gender' => $str->clean($request->gender),
                'dateOfBirth' => $str->clean($request->dateOfBirth),
                'bloodType' => $str->clean($request->bloodType),
                'weight' => $str->clean($request->weight),
                'height' => $str->clean($request->height),
                'address' => $str->clean($request->address),
                'subDistrict' => $str->clean($request->subDistrict),
                'road' => $str->clean($request->road),
                'district' => $str->clean($request->district),
                'province' => $str->clean($request->province),
                'postCode' => $str->clean($request->postCode),
                'idCard' => $str->clean($request->idCard),
                'email' => $str->clean($request->email),
                'phoneNumber' => $str->clean($request->phoneNumber),
                'role' => $str->clean($role)
            ]);

            if ($query) {
                Response::success();
            }

        } else {
            Response::error('username password is unique!');
        }
    }
    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function validateUsernameAsPassword(string $username, string $password): bool
    {
        $result = null;
        $sql = "SELECT username, password FROM user_tb WHERE username =:username AND password =:password";

        $query = (new Query())->select($sql, [
            'username' => $username,
            'password' => $password
        ]);

        if (count($query) > 0) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
}
