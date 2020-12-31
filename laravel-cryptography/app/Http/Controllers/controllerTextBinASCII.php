<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

use function Psy\bin;

class controllerTextBinASCII extends Controller
{    

    public function convertChar(Request $req){
        return view('textBinASCII'); 
    }

    public function textBinASCII(){
        $text = 'PHP Programming'; 
        //$text->input($test); 
        $bin = array(); 
        for($i=0; strlen($text)>$i; $i++) 
            $bin[] = decbin(ord($text[$i])); 
        $result=''; 
        $result.implode(' ',$bin); 
        $hsl = print_r($result); 
        return View('textBinASCII'); 
    }
    
    // public function ASCIIBinText($bin){ 
    //     $text = array(); 
    //     $bin = explode(" ",$bin); 
    //     for($i=0; count($bin)>$i; $i++); 
    //             $text[] = chr(bindec($bin[$i])); 
    //  
    //     return implode($text); 
    // } 

    // public function text2bin(Request $txt) 
    // { 
    //     $bin = ''; 
    //     for ($i = 0; $i < strlen($txt); $i++) 
    //     { 
    //         $bin .= strlen(decbin(ord($txt[$i]))) < 8 ? 
    //             str_pad(decbin(ord($txt[$i])), 8, 0, STR_PAD_LEFT) : decbin(ord($txt[$i])); 
    //         $bin .= " "; 
    //     } 
    //     //return $bin; 
    //     return back(); 
    // } 
    
} 