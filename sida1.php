<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sida1</title>
</head>
<body>
<h1>Rizgar webplats
</h1>
<p class="paragraf">Detta är ett formulär där användaren matar in sitt namn och webbplatsen matar
    <br> ut värdet på olika sätt. </p>
<?php
//Här skapas h1 och p tag med information om sidan
//funktionen som skapas med php koden nedan körs här
utskrift();
//Formulären skapas nedan med inmatnings fält och under formulären skapas en Submit knapp
//PHP koden nedan inkluderar footern som jag skapade för webbplatsen.
?>
<form action="sida1.php" method="post">
    <input type="text" name="name"><br>
    <button type="submit" name="submit">Submit</button><br>
</form>
<?php include "footer.php";?>
</body>
</html>
<?php
//Funktion som skriver ut texten nedan på webbplatsen
function utskrift() {
    echo "Denna text är genererad med utskriftskommandot i PHP";
}

if(isset($_POST['submit'])) // Kolla om man skickat med ett värde på 'submit' via formuläret
{
    //Sparar ner värdet som man har skickat via formuläret i en variabel
    $strName = $_POST['name'];
    // Skriv ut namnet på det som sänts på olika sätt. Har fixat en if else statement där den kollar
    //om man har skickat något värde i formulären.
    if(empty($strName)){
        echo("Hej Rizgar Teimouri <br>");
        echo("Baklänges ");
        echo strrev("Rizgar Teimouri");
        echo ("<br>");
        echo ("Gemener ");
        echo strtolower("Rizgar Teimouri <br>");
        echo ("Versaler ");
        echo strtoupper("Rizgar Teimouri <br>");
        echo ("Antal tecken: ");
        echo strlen("15");

    }
    // En else statement ifall man inte matar in något värde alls i formuläret.
    else{
        echo("Hej $strName <br>");
        echo("Baklänges ");
        echo strrev("$strName");
        echo ("<br>");
        echo ("Gemener ");
        echo strtolower("$strName <br>");
        echo ("Versaler ");
        echo strtoupper("$strName <br>");
        echo ("Antal tecken: ");
        echo strlen("$strName");
    }

}

?>
