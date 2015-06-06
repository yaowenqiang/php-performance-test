<?php
# bade
for ($i = 0; $i < sizeof($array); $i++) {

}
for ($i = 0; $i < sizeof($array); $i++) {

}
for ($i = 0; $i < sizeof($string); $i++) {

}

# compare
#
$s = microtime(true);
$var = md5(_FILE__);
for ($j = 0; $j < 1000000; $j++) {
    for ($i = 0; $i < strlen($var); $i++) {
    }
}
$e = microtime(true);
echo 'for loop with fun&nbsp;&nbsp;&nbsp;: '.($e- $s);
echo "<br>";

$s = microtime(true);
$strlen = strlen($var);
for ($j = 0; $j < 1000000; $j++) {
    for ($i = 0; $i < $strlen; $i++) {
    }
}
$e = microtime(true);
echo 'for loop without fun: '.($e- $s);

echo "<br>";
?>
