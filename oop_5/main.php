<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Person.php';

$bob = new User('Bob',21);
$tom = new User('Tom',22);
$ken = new Person('Ken',23);

echo $bob->selfIntroduction();
echo $tom->selfIntroduction();
echo $ken->selfIntroduction();




?>