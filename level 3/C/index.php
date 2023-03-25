</head>
<body>
    
<form action="" method="get">
    Menentukan Segitiga
    <table>
        <tr>
            <td><label for="a">Sisi 1</label></td>
            <td><input type="number" name="a" id="a"></td>
        </tr>
        <tr>
            <td><label for="b">Sisi 2</label></td>
            <td><input type="number" name="b" id="b"></td>
        </tr>
        <tr>
            <td><label for="c">Sisi 3</label></td>
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

    if($a == 0 || $b == 0 || $c == 0){
        echo "tidak ada segitiga ";
    }
    elseif ($a == $b && $a == $c && $b == $c) {
    echo "Segitiga Sama Sisi";
} else if ($a == $b || $a == $c || $b == $c) {
    echo "Segitiga Sama Kaki";
} else {
    echo "Segitiga Sembarang";
}
}
?>