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
    define("P_VAT", 0.23);

    $ile_koszulki = $_POST['koszulki'];
    $ile_spodnie = $_POST['spodnie'];

    $kwota_koszulki_netto = $ile_koszulki*KOSZULKA; 
    $kwota_spodnie_netto = $ile_spodnie*SPODNIE;

    $kwota_zamowienia_netto = $kwota_koszulki_netto + $kwota_spodnie_netto; 

    $kwota_koszulki_brutto = $kwota_koszulki_netto + $kwota_koszulki_netto*P_VAT; 
    $kwota_spodnie_brutto = $kwota_spodnie_netto + $kwota_spodnie_netto*P_VAT;

    $kwota_zamowienia_brutto = $kwota_koszulki_brutto + $kwota_spodnie_brutto;

    echo "Koszulki NETTO: ".$kwota_koszulki_netto."<br/>";

    echo "Spodnie NETTO".$kwota_spodnie_netto."<br/>";

    echo "ZAMOWIENIE NETTO: ".$kwota_zamowienia_netto."<br/>";

    echo "Koszulki BRUTTO: ".$kwota_koszulki_brutto."<br/>";

    echo "Spodnie BRUTTO: ".$kwota_spodnie_brutto."<br/>";

    echo "ZAMOWIENIE BRUTTO: ".$kwota_zamowienia_brutto."<br/>";
    ?>
    
</body>
</html>