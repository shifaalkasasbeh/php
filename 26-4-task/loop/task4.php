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
    for($i=1; $i<=5; $i++){
        for($x=1;$x<=5; $x++){
            if($i==$x){
                echo $i . " ";
            }
            else 
            echo 0 . " ";
        }
        echo '<br>';
    }
    ?>

</body>
</html>