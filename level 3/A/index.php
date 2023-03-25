</head>
<body>
    
<form action="" method="get">
Menentukan angka terkecil,tengah,terbesar
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
            <td><label for="c">Ketiga</label></td>
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

$cuy = array ($a, $b, $c);
for($a = 0 ; $a <= 2 ; $a++){
} for($b = 0 ; $b <= 1 ; $b++)  {
    for($c = 1 ; $c <= 2 ; $c++) {
        if ($cuy[$b] > $cuy[$c]){
        $swap = $cuy[$b];
        $cuy[$b] = $cuy[$c];
        $cuy[$c] = $swap;
    }
}
}
echo "Hasil = " . 
    $cuy[0]." > "
            ,$cuy[1]. " > "
                ,$cuy[2];
}

?>

<!-- <?php 
if(isset($_GET["submit"])){
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];


$cuy = array ($a, $b, $c);

sort($cuy);

echo "terkecil adalah $cuy[0] <br>";
echo "tengah adalah $cuy[1] <br>";
echo "terbesar adalah $cuy[2]";
}
?> -->


</body>
</html>