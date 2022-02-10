<?php
$line = trim(fgets(STDIN));
$arr = explode(' ', $line);
$n = $arr[0];
$m = $arr[1];


for ($i = 0; $i < $n; $i++) {
    $line = trim(fgets(STDIN));
    $arr[$i] = explode(' ', $line);
    foreach( $arr[$i] as $val){
        $arrA[$i][] = (int)$val;
    }
}
for ($i = 0; $i < $m; $i++) {
    $num = (int)trim(fgets(STDIN));
    $arrb[$i] = $num;
}
foreach($arrA as $arra){
    $result = 0;
    foreach($arra as $index => $a_val){
        $result += $a_val * $arrb[$index];
    }
    print($result.PHP_EOL);
}