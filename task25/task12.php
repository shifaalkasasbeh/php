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
$num1=90;


if($num1<60)
{    echo "f";}

    elseif($num1>=60 && $num1<70)
        {    echo "d" ;
        } 
     
        elseif($num1>=70 && $num1<80)
        {    echo "c" ;
        } 

        elseif($num1>=80 && $num1<90)
        {    echo "b" ;
        }

        elseif($num1>=90 && $num1<100)
        {    echo "a" ;
        }
        
    else {    echo "notfound";  }

?> 
</body>
</html>