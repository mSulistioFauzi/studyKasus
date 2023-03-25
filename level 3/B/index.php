</head>
<body>
    
<form action="" method="get">
    Mencari angka tengah
    <table>
        <tr>
            <td><label for="a">Pertama</label></td>
            <td><input type="number" name="a" id="a"></td>
        </tr>
        <tr>
            <td><label for="b">Kedua</label></td>
            <td><input type="number" name="b" id="b"></td>
        </tr>
        <tr>
            <td><label for="c">ketiga</label></td>
            <td><input type="number" name="c" id="c"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Kirim</button></td>
        </tr>
    </table>
</form>
<?php

if(isset($_GET["submit"])){
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];

if($a > $b){
    if($b > $c){
        echo $b;
    } elseif ($a > $c){
        echo $c;
    } else {
        echo $a;
    }
} elseif ($a > $c) {
    echo $a;
}   else if($b > $c){
    echo $c;
} else {
    echo $b;
}

echo " Adalah nilai tengah dari $a, $b dan $c.";
}
?>

<!-- <?php

if(isset($_GET["submit"])){
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];


$max = max($a, $b, $c);
$min = min($a, $b, $c);

$tengah = ($a + $b + $c) - $max - $min;


echo "Nilai tengah dari $a, $b, dan $c adalah $tengah";
}

?> -->