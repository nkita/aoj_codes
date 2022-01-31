<?php
// https://onlinejudge.u-aizu.ac.jp/courses/lesson/2/ITP1/all/ITP1_7_D

// Matrix Multiplication
// Get Args.
$nml = explode(" ", rtrim(fgets(STDIN)));
$n = (int)$nml[0];
$m = (int)$nml[1];
$l = (int)$nml[1];

$matrixA = array();
for ($i = 0; $i < $n; $i++) {
    $row = explode(" ", rtrim(fgets(STDIN)));
    $matrixA[] = $row;
}
// Transpose of Matrix B.
$matrixB = array();
for ($i = 0; $i < $m; $i++) {
    $row = explode(" ", rtrim(fgets(STDIN)));
    foreach($row as $key => $val){
        $matrixB[$key][$i] = $val;
    }
}
