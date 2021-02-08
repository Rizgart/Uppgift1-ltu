<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sida4</title>
</head>
<body>
<h1>Rizgar webplats</h1>
<p class="paragraf">Detta sida beräknar arean och omkretsen av en rektangel från två
    värden som du matar in. <br></p>
<form action="sida4.php" method="post">
    <h6>Skriv in längden i fältet nedan</h6>
    <input type="text" name="length">
    <h6>Skriv in bredden i fältet nedan</h6>
    <input type="text" name="height"><br>
    <button name="submit" type="submit">Beräkna</button><br>
</form>
<?php
//Här skapas h1 och p tag med information om sidan -->
//Formulären skapas nedan med inmatnings fält och under formulären skapas en Submit knapp
//Koden kallar på funktionen som beräknar omkretsen. -->
calculateCircumference();?>
<?php
//PHP koden nedan inkluderar footern som jag skapade för webbplatsen.  -->
include "footer.php";?>
</body>
</html>
<?php
//Funktion som beräknar omkretsen, den tar in två värden som matas in i sidan. den kallar även på
//funktion calculateArea som räknar ut arena.
function calculateCircumference() {
    if (isset($_POST['submit'])){
        $length = $_POST['length'];
        $height = $_POST['height'];
        $omkrets = 2*($length + $height);

        //Skriver ut värdet på omkretsen och arena på sidan.
        echo ("Omkretsen är: $omkrets <br>");
        echo ("Arean är: " . calculateArea());


    }
}

//Funktion som beräknar arean. Den tar in två värden som matas in i sidan.
function calculateArea() {
    if (isset($_POST['submit'])) {
        $length = $_POST['length'];
        $height = $_POST['height'];
        $area = $length * $height;

        return $area;
    }
}

?>