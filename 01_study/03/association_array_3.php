<?php
$price = [
    'apple'=> 150,'banana'=> 200,'melon' => 300
];
var_dump($price).'<br>';
echo '<hr>';

$sports = [
    'baseball' =>'野球',"soccer" => "蹴球","teniss"=>"庭球"
];
var_dump($sports).'<br>';
echo '<hr>';

$nr = [
    'service'=>['Programing_camp','Online_camp'],
    'language'=>['PHP','Ruby','JAVA','HTML'] ,
    'address'=> ['新宿','八幡平'],
    'members'=> ['Bom','Tom','Ken','John']
];

$nr ['address'][1] ='小平';
$nr ['members'][] = 'yasuo';


var_dump($nr);
echo '<hr>';
?>

