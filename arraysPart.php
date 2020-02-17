<?php
//2.1 Reverse string
function reverseString($string){ 
    $length = strlen($string); 
    $result = "";
    for ($i=($length-1) ; $i >= 0 ; $i--){  
       $result .= $string[$i];  
    }
    return $result;
}
//2.2 Words in text
function getWords(string $text){
    $text = strtolower($text);
    $text = preg_replace('/[^А-Яа-яA-Za-z\s+]/', '', $text);
    $textArr = preg_split("/[\s]+/", $text);
    return array_count_values($textArr);
    
}
//2.3 Array Sum
function sumArrayElements($arr){
    $sum=0;
    foreach($arr as $value){
        if(!is_array($value)){
            $sum += $value;
        } else {
            $sum += sumArrayElements($value);
        }
    }
    return $sum;
}
//2.4 Mirror Letters
function mirrorReplace(string $str){
    $str = strtolower($str);
    $str = str_split($str);
    $base = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    foreach($str as $v){
        $baseLetterKey =(count($base)-1) - array_search($v, $base);
        $result[] = $base[$baseLetterKey];
    }
    return implode($result);
}


//2.5 Unique words
function getUniqueWords(string $text){
    $text = strtolower($text);
    $text = preg_replace('/[^А-Яа-яA-Za-z\s+]/', '', $text);
    $textArr = preg_split("/[\s]+/", $text);
    $result = array_count_values($textArr);
    return array_filter($result, function($v){
        return $v == 1;
    });
}