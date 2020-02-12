<?php 
//1.1 An evil clown
function testString($string){
    $result=preg_replace("/\)\)+/",")",$string);
    return $result;
}

//1.2 Lucky Tickets
function findLuckyTicket(){
    
    for($i=1;$i<=999999;$i++){
        $numberStr=(string)$i;
        if(strlen($numberStr)<6){
            $numberStr = str_pad($numberStr, 6, "00000", STR_PAD_LEFT);
        }
        $str = str_split($numberStr);
        if($str[0]+$str[1]+$str[2] == $str[3]+$str[4]+$str[5]){
            echo $numberStr . '<br>';
        }  

    }
}


