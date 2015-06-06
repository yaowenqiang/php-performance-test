<?php
    echo '<pre>';
    $funs = get_defined_functions();
    echo '已定义函数：<br>';
    print_r($funs);
    $exts = get_loaded_extensions();
    echo '已载入扩展：<br>';
    print_r($exts);
?>
