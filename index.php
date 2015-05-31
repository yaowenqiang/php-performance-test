<?php
    //phpinfo();
$s = microtime(1);
/* error_reporting(E_ALL); */
for ($i = 0; $i < 100000; $i++) {
    $foo[bar.$i]= 1;
}
$e = microtime(1);
echo 'constants index '.($e- $s);

//echo memory_get_usage();
echo '<br>';
$s = microtime(1);
for ($i = 0; $i < 100000; $i++) {
    $foo["bar".$i]= 1;
}
$e = microtime(1);
echo 'string  index '.($e- $s);
?>
