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
$num = 0;  
$num1 = 0;  
$num2 = 1;  
echo $num1.' '.$num2.' ';  
while ($num < 12 )  
{  
    $num3 = $num2 + $num1;  
    echo $num3.' ';  
    $num1 = $num2; 
    $num2 = $num3; 
    $num = $num + 1;  
}
?>
</body>
</html>