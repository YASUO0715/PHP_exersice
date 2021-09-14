<?php

// // 全ての数値の2倍を表示する
// $nums = [1, 2, 3, 4, 5];

// // $numsから1件取り出すので、変数の名前は分かりやすく単数形の$numにしている
// foreach ($nums as $num) {
//     $num *= 2;
//     echo $num . '<br>';
// }

// echo '<hr>';

// // 配列の要素を全て取り出す
// $sports = ['baseball', 'soccer', 'tennis'];

// foreach ($sports as $sport) {
//     echo $sport . '<br>';
// }
?>

<?php

// 配列の要素を全て取り出す
$fruits = ['banana', 'apple', 'melon','cherry','watermelon'];

// 配列のインデックスに合わせて、i = 0からスタート

foreach($fruits as $fruit){
    echo $fruit.'<br>';
}

echo '<hr>';

// 1から10までの値の配列を作る
// PHP5.4以降
$nums = [];

// PHP5.3以前
# $nums = array();

for ($j = 1; $j <= 10; $j++) {
    $nums[] = $j;
}
var_dump($nums);
?>

