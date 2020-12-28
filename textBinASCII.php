<?php
/*************** 
 * 
 * Convert Text to Binary ASCII
 * oder so.
 * 
****************/
header("Content-Type: text/html; charset=utf-8");
function textBinASCII($text){
    $bin = array();
    for($i=0; strlen($text)>$i; $i++)
        $bin[] = decbin(ord($text[$i]));

    return implode(' ',$bin);
}

function ASCIIBinText($bin){
    $text = array();
    $bin = explode(" ",$bin);
    for($i=0; count($bin)>$i; $i++);
            $text[] = chr(bindec($bin[$i]));

    return implode($text);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Text to Binary Converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
        <div>
            <h1>This is what human see...</h1>
            <label>Please enter text below</label>
            <input type="text" name="" class="" value="">
        </div>
        <div>
            <h1>This is what machine sees...</h1>
            <p></p>
        </div>
    </div>
</body>
</html>