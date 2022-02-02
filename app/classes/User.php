<?php
namespace App\classes;
class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'Karwandbazar';

    public function loin(){
        echo 'in login';
    }

    protected function logout(){
        echo 'in logout';
    }

    private function profile(){
        echo 'in profile';
    }
}