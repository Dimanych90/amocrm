<?php


class Index
{


    public function numbers($n)
    {
        if ($n == 1) {
            echo $n . ' ' . 'программист';
        } elseif ($n == 2 || $n == 3 || $n == 4) {
            echo $n . ' ' . 'программиста';
        } elseif ($n == 5 || $n == 6 || $n == 7 || $n == 8 || $n == 9 || $n == 10) {
            echo $n . ' ' . 'программистов';
        }
    }
}

$index = new Index();

$index->numbers(8);
