<?php
namespace App\classes;
use App\classes\User;
class Calculator extends User
{
    public $firstNumber;
    public $secondNumber;
    public $operator;
    public $result;
    public $user;

    public function __construct($data)
    {
        $this->firstNumber  = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator     = $data['operator'];


//        echo $data[2];
//        print_r($data);

//        echo is_array($data) ? 'data is array ' : 'data is single variable';
    }

    public function index(){
        switch ($this->operator)
        {
            case '+':
                $this->result = $this->add();
                break;

            case '-':
                $this->result = $this->sub();
                break;

            case '*':
                $this->result = $this->multiplication();
                break;

//            case '/':
//                echo $this->de();
//                break;
//
//            case '%':
//                echo $this->multiplication();
//                break;
        }

        return $this->result;


    }



    protected function add()
    {
        return $this->firstNumber + $this->secondNumber;

    }

    protected function sub()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    protected function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }
}