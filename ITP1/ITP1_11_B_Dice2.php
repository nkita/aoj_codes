<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/11/ITP1_11_B

// Dice2
// Get Args.
//     1 2 3 4 5 6
// E → 4 2 1 6 5 3
// N → 2 6 3 4 1 5
// S → 5 1 3 4 6 2
// W → 3 2 6 1 5 4
// C → 1 4 2 5 3 6  //横回転

$arr = explode(" ", rtrim(fgets(STDIN)));
$q = rtrim(fgets(STDIN));

$dice = new Dice($arr);
for ($i = 0; $i < $q; $i++) {
    list($top, $front) = explode(" ", rtrim(fgets(STDIN)));
    $flg = false;

    // TOP
    $tflg = false;
    foreach (range(1, 2) as $val) {
        for ($j = 0; $j < 5; $j++) {
            if ($dice->getTop() == $top) {
                $tflg = true;
                break;
            }
            $dice->moveOrder("N");
        }
        if ($tflg) {
            for ($j = 0; $j < 4; $j++) {
                if ($dice->getFront() == $front) {
                    break;
                }
                $dice->moveOrder("C");
            }
        } else {
            $dice->moveOrder("E");
        }
    }
    print($dice->getRight() . PHP_EOL);
}

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

    function getTop()
    {
        return $this->top;
    }

    function getFront()
    {
        return $this->front;
    }

    function getRight()
    {
        return $this->right;
    }

    function moveOrders($orders)
    {
        foreach ($orders as $order) $this->moveOrder($order);
    }
    function moveOrder($order)
    {
        $top = $this->top;
        $front = $this->front;
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
            case 'C':
                $this->front = $this->left;
                $this->left = $this->back;
                $this->back = $this->right;
                $this->right = $front;
                break;
        }
    }
}
