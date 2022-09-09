<?php

namespace MyApp\Controllers\Home;
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
        $sql = "";
        $sql .= "INSERT INTO user_tb(username, password, firstname, lastname, gender, dateOfBirth, bloodType, weight, height, address, subDistrict, road, district, province, postCode, idCard, email, phoneNumber)";
        $sql .= " VALUES(:username, :password, :firstname, :lastname, :gender, :dateOfBirth, :bloodType, :weight, :height, :address, :subDistrict, :road, :district, :province, :postCode, :idCard, :email, :phoneNumber)";

     
        $query = (new Query())->insert($sql, [
            
        ]);

        //Response::render($sql_arr)->jsonString();
    }
}
