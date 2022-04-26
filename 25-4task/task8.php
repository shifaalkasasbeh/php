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
$num1=150;


if($num1<=50)
{    echo $num1*2.5;}

    elseif($num1>50 && $num1<=150)
        {    echo $num1*5 ;
        } 
     
        elseif($num1>150 && $num1<250)
        {    echo $num1*6.20 ;
        } 
    else {    echo $num1*7.50;  }

?> 

</body>
</html>