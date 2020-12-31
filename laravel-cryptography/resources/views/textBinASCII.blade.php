<?php

function testing()
{
    $text = 'PHPProgramming'; 
    $bin = array(); 
    for($i=0; strlen($text)>$i; $i++){ 
        $bin[] = decbin(ord($text[$i])); 
    } 
    $result= implode(' ',$bin); 
    print_r($result);
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
            <form action="{{ route('test') }}" method="GET">
                {{ csrf_field() }}
            <h1>This is what human see...</h1>
            <p>PHP Programming</p>
            <!--
            <label>Please enter text below</label>
            <div>
                <input type="text" id="input_text" name="input_text" placeholder="Input Text">
            </div>
            
            <div>
                <button type="submit">Proses</button>
            </div>
            -->
            </form>
        </div>
        <div>
            <h1>This is what machine see...</h1> 
            <p id="output_text" name="output_text" placeholder="Output Text"><?php echo testing()?></p> 
        </div> 
    </div> 
</body> 
</html> 