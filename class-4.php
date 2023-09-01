<?php
$name = "My name is  shovo";

 echo  strtoupper($name);
 
 
 echo  strtolower($name);

 $desh = "my country is bangladesh <br>";

 echo ucwords($desh);

 echo strrev($desh)."<br>";

 echo strpos($desh,"y <br>");

 echo substr($desh,2,5);


 $reviw  = " apner product ta anak karap ";

 $fname = "joss";

 echo str_replace("karap"," $fname", $reviw );
 $pass = "123456789";

 echo md5($pass)."<br>";

 echo sha1($pass);

 echo "<br> <br><br><br><br>";

 echo password_hash($pass,PASSWORD_BCRYPT);
 
 echo "<br> <br><br><br><br>";


 echo password_hash($pass,PASSWORD_ARGON2I);
 echo "<br> <br><br><br><br>";

//  echo password_hash($pass,PASSWORD_BCRYPT_DEFAULT_COST);

// for man marrage age
function man_age($age){
    if($age >= 21){
        echo " You can marrage";
    }else{
        echo " You can not marrage";

    }
}
man_age(20);
echo "<br> <br> <br>";
// for whoman marrageage
function whoman_age($age){
    if($age >= 18){
        echo " You can marrage";
    }else{
        echo " You can not marrage";

    }
}
whoman_age(21);
echo "<br> <br> <br>";

// greate system
function greate_system($num){
    switch($num){
        case ($num >=80):
            echo "You Get A+";
            break;

         case ($num < 80 && $num >= 70):
                echo "You Get A";
           break;

         case ($num < 70 && $num >= 60):
            echo "You Get A-";
            break;
        case ($num < 60 && $num >= 50):
                echo "You Get B";
            break;
        case ($num < 50 && $num >= 40):
                    echo "You Get C";
            break;
        case ($num < 40 && $num >= 33):
                        echo "You Get D";
             break;
             default:
                echo " you are fail";
             


    }
    

}

greate_system(31);
echo "<br> <br> <br>";

// celsius to Fahrenheit
function c_to_f($celc){
    $f =  ($celc * 9/5) + 32;
    echo " your  Fahrenheit Temperature is $f F";

}
c_to_f(10);
// Fahrenheit to celsius
echo "<br> <br> <br>";
function f_to_c($feren){
    $Fahrenheit = ($feren - 32) * 5/9 ;
    echo " your  Celsius Temperature is $Fahrenheit C";

}
f_to_c(68);
echo "<br> <br> <br>";

// multification
 function multification($num){
    for($i = 1; $i<=10;$i++){
        $a = $num*$i;
        echo "$num x $i  = $a <br>";
    
     }
     
 }
 multification(3);

 echo "<br> <br> <br>";
 

?>