<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/11/ITP1_11_C

// Dice3
// Get Args.
//     1 2 3 4 5 6
// E → 4 2 1 6 5 3
// N → 2 6 3 4 1 5
// S → 5 1 3 4 6 2
// W → 3 2 6 1 5 4
// R → 1 4 2 5 3 6  //横回転

$arr = explode(' ', rtrim(fgets(STDIN)));
$arr2 = explode(' ', rtrim(fgets(STDIN)));

$dice = new Dice($arr);
$dice2 = new Dice($arr2);

$dice2->numberToTop($dice->getVal('top'));
$dice2->numberToFront($dice->getVal('front'));
if ($dice->sameCheck($dice2->toArray())) {
    print('Yes' . PHP_EOL);
} else {
    print('No' . PHP_EOL);
}

class Dice
{
    protected $top;
    protected $front;
    protected $right;
    protected $left;
    protected $back;
    protected $bottom;

    function __construct($arr)
    {
        $this->top    = $arr[0];
        $this->front  = $arr[1];
        $this->right  = $arr[2];
        $this->left   = $arr[3];
        $this->back   = $arr[4];
        $this->bottom = $arr[5];
    }

    public function getVal($pos)
    {
        return $this->{$pos};
    }

    function toArray()
    {
        return array(
            $this->top,
            $this->front,
            $this->right,
            $this->left,
            $this->back,
            $this->bottom
        );
    }

    function sameCheck($target)
    {
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if ($target == $this->toArray()) return true;
                $this->moveOrder("R");
            }
            $this->moveOrder("N");
        }
        return false;
    }

    function numberToTop($num)
    {
        for ($i = 0; $i < 8; $i++) {
            if ($num == $this->top) break;
            $this->moveOrder("N");
            if ($i == 4) $this->moveOrder("E");
        }
    }

    function numberToFront($num)
    {
        for ($i = 0; $i < 8; $i++) {
            if ($num == $this->front) break;
            $this->moveOrder("R");
            if ($i == 4) $this->moveOrder("E");
        }
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
            case 'R':
                $this->front = $this->left;
                $this->left = $this->back;
                $this->back = $this->right;
                $this->right = $front;
                break;
        }
    }
}
