<?php 
function text2bin($txt) 
{ 
    $bin = ''; 
    for ($i = 0; $i < strlen($txt); $i++) 
    { 
        $bin .= strlen(decbin(ord($txt[$i]))) < 8 ? 
                     str_pad(decbin(ord($txt[$i])), 8, 0, STR_PAD_LEFT) : decbin(ord($txt[$i])); 
        $bin .= " ";
    } 
    return $bin; 
} 
echo text2bin('PHP Programming'); 

/*
run:
     
01010000 01001000 01010000 00100000 01010000 01110010 01101111 01100111 01110010 
01100001 01101101 01101101 01101001 01101110 01100111 
        
*/
?>

