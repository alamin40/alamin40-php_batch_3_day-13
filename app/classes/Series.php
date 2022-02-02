<?php
namespace App\classes;
class Series
{

    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;

    public function __construct($data=null)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];
    }

    public function index(){
        header('Location: pages/index.php');
    }

    public function makeSeries()
    {
        if($this->startingNumber>$this->endingNumber)
        { return $this->btosSeries(); }
        else
        {
            return $this->stobSeries();
        }
    }

    protected function stobSeries(){
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            $this->result.= $this->i.' ';
        }
        return $this->result;
    }
    protected function btosSeries(){
        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result.= $this->i.' ';
        }
        return $this->result;
    }
}