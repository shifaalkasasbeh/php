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
$syear =2035;
echo "<h1>";
if(($syear%4==0)&&($syear%100!=0)&&($syear%400==0))
{    echo "the given syear is leap years";
}
    else {
     echo "the given syear is not leap years";

    }

?>
</body>
</html>
