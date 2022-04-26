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
$grade1 =90;
$grade2 = 98;
$grade3 =99;
$grade4 = 96;
$grade5= 100;
$num1= $grade1 + $grade2+ $grade3 + $grade4 + $grade5;
$avg=$num1/5;

if($avg<60)
{    echo "f";}

    elseif($avg>=60 && $avg<70)
        {    echo "d" ;
        } 
     
        elseif($avg>=70 && $avg<80)
        {    echo "c" ;
        } 

        elseif($avg>=80 &&$avg<90)
        {    echo "b" ;
        }

        elseif($avg>=90 && $avg<100)
        {    echo "a" ;
        }
        
    else {    echo "notfound";  }

?> 
</body>
</html>