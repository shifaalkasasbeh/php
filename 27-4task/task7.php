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

function check_palindrome($string) 
{
    $string = str_replace(' ', '', $string);
    $string = str_replace(',', '', $string);
    $string = str_replace('?', '', $string);
    $string = strtolower($string);

  if ($string == strrev($string))
     echo "Yes it is a palindrome ";
  else
     echo "No it is not a palindrome ";
}

check_palindrome('Eva, can I see bees in a cave?');

?>

</body>
</html>