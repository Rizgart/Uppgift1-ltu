<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>sida2</title>
</head>
<body>
<h1>Rizgar webplats
    <p class="paragraf">Detta är ett formulär där användaren matar 3 sorters djur och webbplatsen visar
        <br> värdet på olika sätt. Värden som matas in i tre fälten sparas i en lista.
        Och webbplatsen läser in listan för att skriva ut värden på sidan. <br></p>
</h1>
<p>Skriv in 3 sorters djur i fälten nedan:</p>
<form action="sida2.php" method="post">
    <input type="text" name="name"><br><br>
    <input type="text" name="name2"><br><br>
    <input type="text" name="name3"><br><br>
    <button name="submit" type="submit">Submit</button><br>
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
    //Skapar en array som sparar de tre värden i listan.
    $farmAnimals = [
            0 => $_POST['name'],
            1 => $_POST['name2'],
            2 => $_POST['name3']
    ];

    // printar ut värden på array i sidan, lägger även till två fixerad värden till listan.
    // printar ut värden i råformat.
    print_r($farmAnimals);
    $farmAnimals[3] = "Struts";
    echo "<br>";
    print_r($farmAnimals);
    $farmAnimals[4] = "Alpacka";
    echo "<br>";
    print_r($farmAnimals);
    echo "<br>";
    unset($farmAnimals[0]);

    print_r($farmAnimals);
    echo "<br>";
    print_r($farmAnimals[3]);

}

?>