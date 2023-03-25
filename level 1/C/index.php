<?php
if(isset($_POST['submit'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    
    if( $a > $b ) {
       if ( $a > $c ) {

        if($a > $d) {
            echo  "Bilangan terbesar adalah ".$a;
        } else {
            echo "Bilangan terbesar adalah ".$d;
        }
       } else {
            echo "Bilangan terbesar adalah ".$c;
       }
    } elseif ( $b > $c ) {
        if ($b > $d){
            echo "Bilangan terbesar adalah ".$b;
        } else {
            echo "Bilangan terbesar adalah ".$d;
        }
    } else {
        if($c > $d ){
            echo "Bilangan terbesar adalah ".$c;
        } else {
           echo "Bilangan terbesar adalah ".$d;
        }
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
        <label for="">C</label>
        <input type="text" name="c">
        <label for="">D</label>
        <input type="text" name="d">
        <button type="submit" name="submit">kirim</button>
    </form>

</body>
</html>



    



