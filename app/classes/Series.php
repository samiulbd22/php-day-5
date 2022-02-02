<?php


namespace App\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    Protected $oddEven;
    //protected $user;

    public function __construct($post=null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];

        if (isset($post['odd_even']))
        {
            $this->oddEven = $post['odd_even'];
        }
//        echo $this->oddEven;
//        exit();
    }

    public function index()
    {
        header('Location:pages/index.php');
    }

    public function makeseries()
    {
        if ($this->startingNumber > $this->endingNumber)
        {
           return $this->bigToSmallSeries();
        }
        else
        {
            if ($this->oddEven == 'odd')
            {
               return $this->smalTobigOddSeries();
            }
            else if ($this->oddEven == 'even')
            {
                return $this->smalTobigEvenSeries();
            }
            else{
                return $this->smallToBigOddSeries();
            }
        }
    }

    protected function smallToBigOddSeries()
    {
        for ( $this->i=$this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 !=0)
            {
                $this->result .= $this->i.' ';
            }

        }
        return $this->result;
    }
    }
    protected function smallToBigEvenSeries()
    {
        for ( $this->i=$this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if ($this->i % 2 ==0)
            {
                $this->result .= $this->i.' ';
            }

        }
        return $this->result;
    }


    protected function smalTobigSeries()
    {
        for ( $this->i=$this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {

            $this->result .= $this->i.' ';
        }
        return $this->result;
    }
    protected function bigToSmallSeries()
    {
        for ($this->i=$this->startingNumber; $this->i >= 1; $this->i--)
        {
            $this->result .= $this->i.' ';
        }
        return $this->result;


}