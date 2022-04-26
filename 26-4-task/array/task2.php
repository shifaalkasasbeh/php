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

$Countries = array(
"Germany" => "Berlin",
 "Greece" => "Athens",
"Netherlands"=>"Amsterdam",
 ) ;
asort($Countries) ;
foreach($Countries as $country => $capital)
{
echo "The capital of $country is $capital"."<br>" ;
}
?>
   
</body>
</html>