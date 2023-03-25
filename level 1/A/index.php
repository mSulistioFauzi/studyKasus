<?php

if(isset($_POST['submit'])) {

$A = $_POST["a"];
$B = $_POST["b"];

if($A > $B){
    echo "Bilangan terbesar adalah ". $A;
}
else {
    echo "Bilangan terbesar adalah ". $B;
}
}


?>

<hr>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <label for="">A</label>
        <input type="text" name= "a">
        <label for="">B</label>
        <input type="text" name="b">
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>
</html>



    



