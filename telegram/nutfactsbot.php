<?php

$botToken = "1161004001:AAFy9I35r8HWjIwuNY1OuYfA6S_VylGLS74";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getUpdates);

print_r($update);


?>