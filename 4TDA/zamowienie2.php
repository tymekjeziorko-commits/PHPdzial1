<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
    define("KOSZULKA", 14.99);
    define("SPODNIE", 45.99);
    define("BUTY", 1.00);
    define("P_VAT", 0.23);

    $ile_koszulki = $_POST['koszulki2'];
    $ile_spodnie = $_POST['spodnie2'];
    $ile_buty = $_POST['buty'];

    $kwota_koszulki_netto = $ile_koszulki*KOSZULKA; 
    $kwota_spodnie_netto = $ile_spodnie*SPODNIE;
    $kwota_buty_netto = $ile_buty*BUTY;

    $kwota_koszulki_brutto = $kwota_koszulki_netto + $kwota_koszulki_netto*P_VAT; 
    $kwota_spodnie_brutto = $kwota_spodnie_netto + $kwota_spodnie_netto*P_VAT;
    $kwota_buty_brutto = $kwota_buty_netto + $kwota_buty_netto*P_VAT;

    $kwota_zamowienia_brutto = $kwota_koszulki_brutto + $kwota_spodnie_brutto + $kwota_buty_netto;

    echo "Koszulki kosztują:".$kwota_koszulki_brutto." BRUTTO"."<br/>"."<br/>";

    echo "Spodnie BRUTTO: ".$kwota_spodnie_brutto."<br/>"."<br/>";

    echo $kwota_buty_brutto." to cena BRUTTO butów"."<br/>"."<br/>";

    echo "ZAMOWIENIE WYNOSI "."<br/>".$kwota_zamowienia_brutto."<br>"."BRUTTO"."<br/>";
    ?>
    <br>
    <form action="kasa.php" method="post">
    Wstaw kwote zapłaty: <input type="text"
    name="kwota" size=3 maxsize=3 />
    <input type="hidden"
    name="cena" value="<?php echo $kwota_buty_brutto ;?>" />
     <br>

</body>
</html>