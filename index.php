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
   Index need find:<input type="text" name="index">
    <br>
    <input type="submit" value="Find">
</form>
<?php
function createArray(){
    $array=[];
    for($i=0;$i<100;$i++)
    {
        array_push($array,rand(1,100));

    }
    return $array;
}
function useException($number){
    try{
        if ($number<0 || $number>=100){
            throw new Exception("error");
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }
    return $number;
}
function findNumber(){
    $array=createArray();
    $number=useException($_POST['index']);
    foreach ($array as $key=>$value){
        if($number==$key){
            echo "Vi tri ".$number." co gia tri ".$value;
        }
    }
}
findNumber();
?>
</body>
</html>
