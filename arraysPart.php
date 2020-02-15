<?php
//2.1 Reverse string
function reverseString($string){ 
    $length = strlen($string);  
    for ($i=($length-1) ; $i >= 0 ; $i--){  
        return $string[$i];  
    }
}
//2.2 Words in text
function getWords($word,string $text){
    $text = strtolower($text);
    $textArr = preg_split("/[\s,]+/", $text);
    $result = array_count_values($textArr);
    return array_filter($result, function($k)use($word) {
        return $k == strtolower($word);
    }, ARRAY_FILTER_USE_KEY);
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
function mirrorReplace($arr){
    $base = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $newArr = str_split($arr);
    foreach($newArr as $v){
        $baseLetterKey =(count($base)-1) - array_search($v, $base);
        $result[] = $base[$baseLetterKey];
    }
    $mirrorString = implode($result);
    return $mirrorString;
}

//2.5 Unique words
function getUniqueWords(string $text){
    $text = strtolower($text);
    $textArr = preg_split("/[\s,]+/", $text);
    $result = array_count_values($textArr);
    return array_filter($result, function($v){
        return $v == 1;
    });
}