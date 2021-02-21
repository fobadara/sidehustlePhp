<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My code</title>
    </head>
    <body>
    <?php
function generateNUmbers($length){
    $container = "";
    for ($i=0; $i < $length; $i++) { 
       $container .= mt_rand(0, 9);
    }
    return $container;
}
for ($i=1; $i <= 200; $i++) {  
     echo $i;
     echo ") "; 
     echo generateNUmbers(12);# code...
     echo "<br>";
}
?>
    </body>
</html>