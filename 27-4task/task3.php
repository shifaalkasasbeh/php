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

 
$strings = array('remove','gfg123', 'geeksforgeeks', 'GfG');
 
// Checking for above three strings one by one.
foreach ($strings as $testcase) {
    if (ctype_lower($testcase)) {
        echo "yes <br>";
    } else {
        echo "No <br>";
    }
}
?>
</body>
</html>