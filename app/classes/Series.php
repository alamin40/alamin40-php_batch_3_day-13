<?php
namespace App\classes;
class Series
{

    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;

    public function __construct($data=null)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];

        if(isset($data['odd_even'])){
            $this->oddEven = $data['odd_even'];
        }

    }

    public function index(){
        header('Location: pages/index.php');
    }

    public function makeSeries()
    {
        if($this->startingNumber>$this->endingNumber)
        {
            {
                if ($this->oddEven == 'odd')
                {
                    return $this->btosOddSeries();
                }
                else if($this->oddEven == 'even')
                {
                    return $this->btosEvenSeries();
                }
                else{
                    return $this->btosSeries();
                }

            }
        }
        else
        {
            if ($this->oddEven == 'odd')
            {
                return $this->stobOddSeries();
            }
            else if($this->oddEven == 'even')
            {
                return $this->stobEvenSeries();
            }
            else{
                return $this->stobSeries();
            }

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

    protected function stobOddSeries(){
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if($this->i % 2 != 0){
                $this->result.= $this->i.' ';
            }

        }
        return $this->result;
    }
    protected function stobEvenSeries(){
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if($this->i % 2 == 0){
                $this->result.= $this->i.' ';
            }
        }
        return $this->result;
    }

    protected function btosOddSeries(){
        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            if($this->i % 2 != 0){
                $this->result.= $this->i.' ';
            }

        }
        return $this->result;
    }
    protected function btosEvenSeries(){
        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            if($this->i % 2 == 0){
                $this->result.= $this->i.' ';
            }
        }
        return $this->result;
    }
}