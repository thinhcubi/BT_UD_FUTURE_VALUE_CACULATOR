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
    <input type="text" name="Amount" placeholder="Luong tien dau tu ban dau"/>
    <input type="text" name="Rate" placeholder="Lai suat nam"/>
   <input type="text" name="Year" placeholder="So nam"/>
    <input type="submit" name="submit" value="Tinh" />
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $Money = $_POST["Amount"];
    $Interest = $_POST["Rate"];
    $Year = $_POST["Year"];

    for ($i = 1; $i <= $Year; $i++) {
        $Future = $Money + ($Money * ($Interest / 100));
         $Money = $Future;
    } echo $Money;
}
?>


</body>
</html>
