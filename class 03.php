<?php
$a=10;
$b=30;
$c=70;
if ( $a>$b and $b>$c){
    echo"$a is the bigest num";
}
elseif($b>$a and $b>$c){
    echo"$b is the bigest num";
}
else {
    echo"$c is the bigest num";
}
echo"<br>";
function bignum($n1,$n2,$n3){
    $a=$n1;
    $b=$n2;
    $c=$n3;
    if ( $a>$b and $b>$c){
        echo"$a is the bigest num";
    }
    elseif($b>$a and $b>$c){
        echo"$b is the bigest num";
    }
    else {
        echo"$c is the bigest num";
    }
}
    bignum ("90","10","40");
    echo"<br>";
    

   
    $name="sumi";
    $number="10";
    echo ctype_alpha($name);echo"<br>";
    echo ctype_alpha($number);echo"<br>";//wrong
    echo ctype_alnum($number);echo"<br>";
    var_dump (ctype_alpha($number));echo"<br>";
    var_dump (ctype_alnum($name));echo"<br>";

    $name="moni";
    if(ctype_alnum($name)==1){
        echo "this is true";
    }
    else {
        echo"this is false";
    }
    echo"<br>";
//example for false

    if(ctype_alnum($name)==null){
        echo "this is true";
    }
    else {
        echo"this is false";
    }
   // positive number ,negative number ,
echo"<br>";
   $num= 10;
   if($num>0)
   {
       echo"positive number";
   }
   elseif($num<0)
   {
       echo "negative number";
   }
   else {
       echo"this number is 0";
   }
   echo"<br>";


function number($n){
   $num= $n;
   if($num>0)
   {
       echo"positive number";
   }
   elseif($num<0)
   {
       echo "negative number";
   }
   else {
       echo"this number is 0";
   }
}
number(-3); echo"<br>";
number(5);  echo"<br>";
number(0);  echo"<br>";
//nested if

$num= 10;
   if($num>0)
   {
       if($num%2==0){
           echo " $num is even num";
       }
       else {
           echo"$num is odd num";
       }
   }
   elseif($num<0)
   {
       echo "negative number";
   }
   else {
       echo"this number is 0";
   }
    echo"<br>";


   $fb_id="Fatema nur";
   $password="12345";
   if ($fb_id=="Fatema nur"){
      if($password=="12345"){
        echo"facebook id login";
      }
      else {
          echo"your password is wrong";
      }
   }
   else {
       echo"facebook id wrong";
   }
   echo"<br>";


   $fb_id="Fatema nur";
   $password="12345";
   if($fb_id=="Fatema nur" && $password=="12345")
   {
     echo  "log in your fb page";
   }
   else {
       echo"wrong";
   }
   echo"<br>";

   $loan=100000;
   $interest="5%";
   $interest=5/100;
   echo"interest $interest ";
   echo"<br>";
   $year=2;//24 month
   $totalin=$interest*$year;
   echo " totalin $totalin tk";  echo"<br>";
   $totalinmo=$totalin*$loan;
   echo"$totalinmo"; echo"<br>";
   $totalloan=$totalinmo+$loan;
   echo"$totalloan";echo"<br>";
   $permonth=$totalinmo/24;
   echo"$permonth";
   echo"<br>";

   $income =50000;
   $cost=30000;
   $saving=$income-$cost;
   echo"saving $saving tk"; 
   echo"<br>";
   if($saving>$permonth){
       echo"possible";
   }
   elseif($saving<$permonth) {
       echo"not possible ";
   }
   echo"<br>";
   $ar = ['sumi',10,'meem'];
   echo"array is($ar[1])";
  
   echo"<pre>";
   var_dump ($ar);
   echo"</pre>";
   

   







    