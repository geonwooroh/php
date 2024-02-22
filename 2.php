<?php
    $txt = "hello";//문자열
    $a= 10;//정수
    $b = 1.5;//실수

    $A = 20;
    echo  "x는 $a, y는 $A";//대소문자 구분

    function mytest(){
        global $a;
        $a++;
        echo "a의 값은 $a.";
    }
    mytest();

   // $a--;

    echo "a의 값은 $a";


?>