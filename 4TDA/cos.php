

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Pierwszy kod w PHP";
    echo "<br>";
    define("definicja","19");
    echo definicja;
    echo "<br>";
    $stala = "stala";
    echo $stala;
    echo "<br>";
    $a = 5; $b = 13;
    echo $a + $b;
    echo "<br>";
    var_dump($a == $b);
    echo "<br>";
    $c = "tak";
    $d = "tak";
    if ($c == "tak" || $d == "tak") 
    { echo "tak"; } else { echo "nie"; }
    echo "<br>";
    echo "Zdanie kończy się w"; // komentarzu
    /* oooooo
    oooo
    oooo */
    echo "<br>";
    $e = 5; 
    $f = "13b"; 
    echo var_dump($e * $f) ;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>

    <form action="zamowienie.php" method="post">
Liczba zamawianych koszulek: <input type="text"
 name="koszulki" size=3 maxsize=3 /> <br>
Liczba zamawianych spodni: <input type="text"
 name="spodnie" size=3 maxsize=3 /> <br>
 <input type="submit" value="złóż zamówienie" /> 
    
</body>
</html>