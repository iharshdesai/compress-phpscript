<?php 
function compress_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s',     
        '/[^\S ]+\</s',     
        '/(\s)+/s',         
        '/<!--(.|\s)*?-->/'
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}
ob_start("compress_output");
?>