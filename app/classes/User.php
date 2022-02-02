<?php
namespace App\classes;
class User
{
   protected $user = [];
   public function getAllUser(){
       $this->user = [
           0 => [
               'name'       =>  'Shahabuddin',
               'mobile'     =>  '12233122',
               'location'   =>  'lalbagh'
           ],
           1 => [
               'name'       =>  'Niloy',
               'mobile'     =>  '225233122',
               'location'   =>  'lalbagh'
           ],
           2 => [
               'name'       =>  'Raju',
               'mobile'     =>  '332523312',
               'location'   =>  'lalbagh'
           ],
       ];
       return $this->user;
   }
}