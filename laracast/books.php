<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>

<?php
    $name="Dark matter";
    $read=false;
    if($read){
        $message="You have read $name";
    }
    else{
        $message="You have not read $name";
    }


    ?>
<body>
    <h1> <?php  echo $message;?></h1>
    
   
</body>
</html>