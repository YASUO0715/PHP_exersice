<?php

$profile = [
    'name' => 'Bob',
    'age'=> 21,
    'staff'=>[
        'Tom',
        'Ken',
        'John'
    ]
];

echo $profile['staff'][1];
echo '<br>';
echo $profile['staff'][2];
/* var_dump($profile); // 全ての要素を探ってくれる */

echo '<hr>';

print_r($profile); // キーが2のデータはArrayとだけ表示される
