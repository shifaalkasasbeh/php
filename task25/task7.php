<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
$num1=20;
$num2=2;
$num3=50;

if($num1>$num2 && $num1>$num3)
{    echo $num1;}

    elseif($num2>$num1 && $num2>$num3)
        {    echo $num2 ;
        } 
     
    else {   echo $num3 ;   }

?> 
</body>
</html>