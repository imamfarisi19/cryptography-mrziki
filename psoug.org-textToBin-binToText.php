<?PHP
 
FUNCTION bin2text($bin_str) 
{ 
    $text_str = ''; 
    $chars = EXPLODE("\n", CHUNK_SPLIT(STR_REPLACE("\n", '', $bin_str), 8)); 
    $_I = COUNT($chars); 
    FOR($i = 0; $i < $_I; $text_str .= CHR(BINDEC($chars[$i])), $i  ); 
    RETURN $text_str; 
} 
 
FUNCTION text2bin($txt_str) 
{ 
    $len = STRLEN($txt_str); 
    $bin = ''; 
    FOR($i = 0; $i < $len; $i) 
    { 
        $bin .= STRLEN(DECBIN(ORD($txt_str[$i]))) < 8 ? STR_PAD(DECBIN(ORD($txt_str[$i])), 8, 0, STR_PAD_LEFT) : DECBIN(ORD($txt_str[$i])); 
    } 
    RETURN $bin; 
} 
PRINT text2bin("Isn't this cool?"); 
 
?>