<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="numberA" placeholder="Nhap a"/>
    <input type="text" name="numberB" placeholder="Nhap b"/>
    <input type="text" name="numberC" placeholder="Nhap c"/>
    <input type="submit" name="submit"/>
</form>
<?php
include_once "class.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $a = $_POST["numberA"];
    $b = $_POST["numberB"];
    $c = $_POST["numberC"];
    $quadratic = new Quadratic($a,$b,$c);
    if($quadratic->getDiscriminant()>0){
        echo $quadratic->getRoot1()."<br>";
        echo $quadratic->getRoot2();
    } else if($quadratic->getDiscriminant()==0){
        echo $quadratic ->getRoot1();
    } else {
        echo "The equation has no roots";
    }
}
?>
</body>
</html>
