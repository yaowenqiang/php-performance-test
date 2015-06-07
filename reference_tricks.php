<?php
$a['b']['c'] = array();
$s = microtime(true);
for ($i = 0; $i < 100000; $i++) {
    $a['b']['c'][$i] = $i;
}
$e = microtime(true);
echo '&nbsp;no&nbsp; reference: '.($e- $s).'<br>';

$a['b']['c'] = array();
$ref = & $a['b']['c'];
$s = microtime(true);
for ($i = 0; $i < 100000; $i++) {
    $ref[$i] = $i;
}
$e = microtime(true);
echo ' with reference: '.($e- $s);
/* End of file <`2:filename`>.php */
