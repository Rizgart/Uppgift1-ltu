<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sida5</title>
</head>
<body>
<h1>Rizgar webplats</h1>
<p class="paragraf">Sidan visar information om webbplatsen, det visar servernamn,
    vilken ip-adress det är, filnamnet, vilken port som används för servern och
    vilken metod som används för sidan. <br></p>

<?php
//<! -- Här skapas h1 och p tag med information om sidan -->
//<! --Funktionerna nedan visar informationen om webbsidan. -->
showServerName();?><br>
<?php showServerIp();?><br>
<?php showServerFileName();?><br>
<?php showServerPort();?><br>
<?php showServerMethod();?><br>

<?php
//<! --PHP koden nedan inkluderar footern som jag skapade för webbplatsen.  -->
include "footer.php";?>
</body>
</html>
<?php
//Funktion som beräknar omkretsen, den tar in två värden som matas in i sidan. den kallar även på
//funktion calculateArea som räknar ut arena.
function showServerName() {
    echo $_SERVER['SERVER_NAME'];
}
function showServerIp() {
    echo $_SERVER['SERVER_ADDR'];
}
function showServerFileName() {
    echo $_SERVER['SCRIPT_NAME'];
}
function showServerPort() {
    echo $_SERVER['SERVER_PORT'];
}
function showServerMethod() {
    echo $_SERVER['REQUEST_METHOD'];
}

?>
