<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sida3</title>
</head>
<body>
<h1>Rizgar webplats</h1>
<p class="paragraf">Formuläret läser in det man har skrivit och skriver ut det i råformat.
    Man kan även söka efter ett specifikt ord i texten och sidan kommer visa hur många gånger
    ordet används. <br></p>
<form action="sida3.php" method="post">
    <textarea rows="4" cols="40" name="name"></textarea><br>
    <h6>Skriv in ett sökord för din text i fältet nedan</h6>
    <input type="text" name="name2">
    <button type="submit" name="submit">Submit</button><br>
</form>
<?php
//Här skapas h1 och p tag med information om sidan -->
//Formulären skapas nedan med inmatnings fält och under formulären skapas en Submit knapp -->
//PHP koden nedan inkluderar footern som jag skapade för webbplatsen.  -->
include "footer.php";?>
</body>
</html>
<?php

if(isset($_POST['submit'])) // Kolla om man skickat med ett värde på 'namn' via formuläret
{
    //Skapar en foreach loop som ska spara alla värden som matas in i formulären.
    $text = $_POST['name'];
    $searchWord = $_POST['name2'];
    $textMessage = explode(" ", $text);
    print_r($textMessage);
    echo ("<br>");

    $count = count($textMessage);

    //Skapar en loop som kollar in värden i array och visar positionen i sidan.
    foreach ($textMessage as $key => $value){
        if($searchWord == $value){
            echo ("Ordet ". $value . " finns på plats: " . $key . " ");
        }
    }

    echo ("<br>");
    //En foreach loop för att räkna ut hur mångar gånger ett ord hittas i texten
    $countWord = 0;
    foreach ($textMessage as $item){
        if($searchWord == $item){
            $countWord++;
        }
    }
    // en if statement ifall ordet finns i texten mer än en gång.
    if($countWord > 1){
        echo ("Ordet $searchWord hittades $countWord gånger");
        echo ("<br>");
    } else {
        echo ("Ordet $searchWord hittades $countWord gång");
    }

}

?>