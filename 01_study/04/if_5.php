<?php

// 2種類のテストの得点により合否判定を行う
// どちらのテストも80点以上: 合格
// どちらかのテストが50点以上: 追試
// 上記2つの条件を満たさない:  不合格

$score_1 = 79;
$score_2 = 803;

if ($score_1 >= 80 && $score_2 >= 80) {
    echo '合格';
} elseif ($score_1 >= 50 || $score_2 >= 50){
    echo '追試';
} else {
    echo '不合格';
}
echo '<hr>';
echo '<br>';
?>


<?php 
$score_1 = 30 ;
$score_2 = 80 ;

if ($score_1 >= 80 && $score_2 >= 80 ){
    echo '合格';
}elseif($score_1 >= 50 || $score_2 >= 50){
    echo '追試';
}else{
    echo '不合格';
}

?>
