<?php

function fully_divisable($n){
    if(($n % 2)== 0){
        return "$n is fully disivisable by 2";
    }
    else{

        return "$n is not fully disivisable  by 2";
    }
}

print_r(fully_divisable(4). "<br>");
print_r(fully_divisable(36). "<br>");
print_r(fully_divisable(16). "<br>");
print_r(fully_divisable(5). "<br>");

?>