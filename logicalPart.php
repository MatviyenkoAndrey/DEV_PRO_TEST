<?php 
//1.1 An evil clown
function testString($string){
    $patterns = array("/\)\)+/","/\(\(+/");
    $replace = array(")","(");
    return preg_replace($patterns,$replace,$string);
}

//1.2 Lucky Tickets
function findLuckyTicket(){
    for($i=1;$i<=999999;$i++){
        $numberStr=(string)$i;
        if(strlen($numberStr)<6){
            $numberStr = str_pad($numberStr, 6, "0", STR_PAD_LEFT);
        }
        if($numberStr[0]+$numberStr[1]+$numberStr[2] == $numberStr[3]+$numberStr[4]+$numberStr[5]){
            $result[]=$numberStr;
        }  
    }
    return $result;
}


