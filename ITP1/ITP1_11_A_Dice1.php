<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/11/ITP1_11_A

// Dice1
// Get Args.

//     1 2 3 4 5 6
// E → 4 2 1 6 5 3
// N → 2 6 3 4 1 5
// S → 5 1 3 4 6 2
// W → 3 2 6 1 5 4

$arr = explode(" ", rtrim(fgets(STDIN)));
$orders = str_split(rtrim(fgets(STDIN)));

$dice = new Dice($arr);
$dice->moveOrders($orders);
$dice->printTop();

class Dice
{
    function __construct($arr)
    {
        $this->top    = $arr[0];
        $this->front  = $arr[1];
        $this->right  = $arr[2];
        $this->left   = $arr[3];
        $this->back   = $arr[4];
        $this->bottom = $arr[5];
    }

    function printTop()
    {
        print($this->top . PHP_EOL);
    }

    function moveOrders($orders)
    {
        foreach ($orders as $order) $this->moveOder($order);
    }
    function moveOder($order)
    {
        $top = $this->top;
        switch ($order) {
            case 'E':
                $this->top = $this->left;
                $this->left = $this->bottom;
                $this->bottom = $this->right;
                $this->right = $top;
                break;
            case 'N':
                $this->top = $this->front;
                $this->front = $this->bottom;
                $this->bottom = $this->back;
                $this->back = $top;
                break;
            case 'S':
                $this->top = $this->back;
                $this->back = $this->bottom;
                $this->bottom = $this->front;
                $this->front = $top;
                break;
            case 'W':
                $this->top = $this->right;
                $this->right = $this->bottom;
                $this->bottom = $this->left;
                $this->left = $top;
                break;
        }
    }
}
