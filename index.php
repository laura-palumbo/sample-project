<?php

$a = 1;

function left($str, $length) {
     return substr($str, 0, $length);
}
 
function right($str, $length) {
     return substr($str, -$length);
}

?>
