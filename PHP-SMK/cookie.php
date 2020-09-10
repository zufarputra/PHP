<?php
$cookie_name = 'user';
$cookie_value = 'John Mayer';
setcookie($cookie_name, $cookie_value);


$cookie_value = 'Mayor Isman';

setcookie($cookie_name, $cookie_value);

echo $_COOKIE[$cookie_name];

setcookie("user", "", time() - 3600);

echo "<br>";

var_dump($_COOKIE);
