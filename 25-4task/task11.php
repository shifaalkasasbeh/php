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
$num1 =20;
$num2 = 10;
$operator  = '*' ;
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case '+' :
           $result = $num1 + $num2;
            break;
        case '-' :
           $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
    }
    echo $result .'<br>' ;
}

?>  


</body>
</html>