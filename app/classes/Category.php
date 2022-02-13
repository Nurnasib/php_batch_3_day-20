<?php


namespace App\classes;


trait Category
{
    public  $a = 'BITM';
    public  $b = 'BASIS';
    public function hello()
    {
        echo $this->a .' '.$this->b;
    }
}