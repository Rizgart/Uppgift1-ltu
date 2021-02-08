<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sida6</title>
</head>
<body>
<h1>Rizgar webplats</h1>
<p class="paragraf">Webbplatsen visar upp ditt namn och mobilnummer   <br></p>
<?php
//Här skapas h1 och p tag med information om sidan -->
//PHP koden nedan inkluderar footern som jag skapade för webbplatsen.  -->
include "footer.php";?>
</body>
</html>

<?php

if(isset($_GET['submit'])) //Kollar om värden har kommit genom submit knappen
{
    //Sparar värden i variabler
    $name = $_GET['name'];
    $phoneNumber = $_GET['phone'];

    echo ("The users name is: $name");
    echo ("<br>");
    echo ("The users phonenumber is: $phoneNumber");

}

if (isset($_POST['submit'])){
    //Sparar värden i variabler
    $name = $_POST['name'];
    $phoneNumber = $_POST['phone'];

    echo ("The users name is: $name");
    echo ("<br>");
    echo ("The users phonenumber is: $phoneNumber");
}


?>

