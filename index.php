<?php
/**
 * Created by PhpStorm.
 * User: Toprak ilhan
 * Date: 15-02-2024
 * Time: 09:29
 * git aanpassing
 */
echo "Hello World! \r\n";
echo " \r\n";
echo "<br>";

//Opdracht-01:
echo "Opdracht-01: \r\n";
if (2 > 0) {
    echo "2 is is groter dan 0 \r\n";
}
echo " \r\n";       //lege regel
echo "<br>";

//Opdracht-02:
echo "Opdracht-02: \r\n";
$a = 9;
if ($a >= 0 && $a <= 10) {
    echo $a, " zit tussen de 0 en de 10 \r\n";
}
echo " \r\n";
echo "<br>";


//Opdracht-03:
echo "Opdracht-03: \r\n";
$b = 7;
if ($b >= 0 and $b <= 10) {
    if ($b < 6) {
        echo $b, " is een onvoldoende. \r\n";
    } else {
        echo $b, " is een voldoende. \r\n";
    }
} else {
    echo $b, " is niet tussen 0 en 10 \r\n";
}
echo " \r\n";
echo "<br>";


//Opdracht-04:
echo "Opdracht-04: \r\n";
for ($i = 1; $i <= 10; $i += 2) {
    echo $i , " \r\n";
}
echo " \r\n";
echo "<br>";


//Opdracht-05:
echo "Opdracht-05: \r\n";
$nummer = 7;
echo "De tafel van $nummer is:\n";

for ($i = 1; $i <= 10; $i++) {
    $resultaat = $nummer * $i;
    echo "$nummer x $i = $resultaat\n";
}
echo " \r\n";
echo "<br>";


//Opdracht-06:
echo "Opdracht-06: \r\n";
$a = 0;
$b = 1;

echo "Fibonacci reeks onder 1000:\n";

while ($a <= 1000) {
    echo $a . " ";

    $tijdelijk = $a + $b;
    $a = $b;
    $b = $tijdelijk;
}
echo " \r\n";
echo " \r\n";
echo "<br>";


?>




<!-- Opdracht 7, 8, 9 -->
<html lang="en">
    <head>
        <title>Achtergrond instellen</title>
    </head>
    <body <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //print_r($_POST);
        echo $_POST["achtergrondkleur"];
    }
    ?>
    >

        <form method="post" action="index.php">
            <label for="kleurcode">Opdracht 7, 8 & 9:</label><br>
            <label for="kleurcode">Voer een HTML-kleurcode in:</label>
            <input type="text" name="achtergrondkleur" title="achtergrondkleur" value="#FFFF00" required>
            <br>
            Naam: <input type="text" name="naam" title="naam" value="Toprak">
            <br>
            Leeftijd: <input type="text" name="leeftijd" title="leeftijd" value="18">
            <br>
            Voer een getal in: <input type="text" name="getal" title="getal" value="7">
            <br><br>
            <label for="kleurcode">Opdracht-17: Schrijf wat tekst in:</label>
            <br>
            <label>
                <textarea name="opdr17" rows="5" cols="50">Typ wat in</textarea>
            </label>
            <br><br>
            <label for="kleurcode">Klik om te verzenden:</label>
            <br>
            <input type="submit" value="Verzenden"><br>
        </form>


        <?php


        //Opdracht 07 & 08:
        //print_r($_SERVER);
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Ontvang de ingevoerde kleurcode
            $achtergrondkleur = $_POST["achtergrondkleur"];

            // Controleer of de ingevoerde kleurcode een geldige HTML-kleurcode is
            if (preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', $achtergrondkleur)) {
                // Stel de achtergrondkleur in
                echo "<body style='background-color: $achtergrondkleur;'>";
                echo "<h2>Achtergrondkleur is ingesteld!</h2>";
            } else {
                // Toon een foutmelding als de kleurcode niet geldig is
                echo "<p>Opdracht-07: Ongeldige kleurcode. Voer een geldige HTML-kleurcode in.</p>";
            }


            echo "Opdracht-08: \r\n";
            echo "<br>";
            print_r($_POST) . "<br>";
            echo "<br>";
            $age = $_POST['leeftijd'];
            $name = $_POST["naam"];
            for ($count = 1; $count <= $age; $count++) {
                echo $count . ": " . $name . "<br>";
            }
            echo "<br>";

            echo "Opdracht-09: " . "<br>";
            $getal = $_POST["getal"];
            //echo '$getal: ' . $getal . "<br>";
            for ($z = 1; $z <= 10; $z++) {
                $uitslag = $getal * $z;
                echo $getal . " * " . $z . " = " . $uitslag;
                echo "<br>";
            }

        }
        ?>
    </body>
</html>


<!--Oefen opdracht-->
<pre>
<?php
$alles = scandir("img/back");
$alles = array_splice($alles, 2);
print_r($alles);
?>
</pre>


<!--Opdracht-10:-->
<?php echo "Opdracht-10: \r\n"; ?><br>
<a href="img/back/back_blue.png">back_blue.png</a><br>
<a href="img/back/back_gray.png">back_gray.png</a><br>
<a href="img/back/back_green.png">back_green.png</a><br>
<a href="img/back/back_purple.png">back_purple.png</a><br>
<br>



<!--Opdracht-11:-->
<?php echo "Opdracht-11: \r\n"; ?><br>
<a href=index.php?imgLocatie1=img/back/back_blue.png>back_blue.png</a><br>
<a href=index.php?imgLocatie2=img/back/back_gray.png>back_gray.png</a><br>
<a href=index.php?imgLocatie3=img/back/back_green.png">back_green.png</a><br>
<a href=index.php?imgLocatie4=img/back/back_purple.png>back_purple.png</a><br>
<a href=index.php?imgLocatie1=img/back/back_blue.png&imgLocatie2=img/back/back_gray.png&imgLocatie3=img/back/back_green.png&imgLocatie4=img/back/back_purple.png>allemaal</a><br>
<br>

<img src="<?php echo $_GET['imgLocatie1'] ?>" alt="back_blue.png" width="120" height="200">
<img src="<?php echo $_GET['imgLocatie2'] ?>" alt="back_gray.png" width="120" height="200">
<img src="<?php echo $_GET['imgLocatie3'] ?>" alt="back_green.png" width="120" height="200">
<img src="<?php echo $_GET['imgLocatie4'] ?>" alt="back_purple.png" width="120" height="200">
<br>
<br>


<!--Opdracht-12:-->
<?php echo "Opdracht-12: \r\n"; ?><br>
<a href=index.php?imgLocatie=img/back/back_blue.png>
    <?php
    $Tussenstapblue = str_replace("back_", "", "back_blue.png");
    $eindstapBlue = str_replace(".png", "", $Tussenstapblue);
    echo $eindstapBlue;
    ?>
</a><br>
<a href=index.php?imgLocatie1=img/back/back_gray.png>
    <?php
    $Tussenstapblue = str_replace("back_", "", "back_gray.png");
    $eindstapBlue = str_replace(".png", "", $Tussenstapblue);
    echo $eindstapBlue;
    ?>
</a><br>
<a href=index.php?imgLocatie2=img/back/back_green.png">
    <?php
    $Tussenstapblue = str_replace("back_", "", "back_green.png");
    $eindstapBlue = str_replace(".png", "", $Tussenstapblue);
    echo $eindstapBlue;
    ?>
</a><br>
<a href=index.php?imgLocatie3=img/back/back_purple.png>
    <?php
    $Tussenstapblue = str_replace("back_", "", "back_purple.png");
    $eindstapBlue = str_replace(".png", "", $Tussenstapblue);
    echo $eindstapBlue;
    ?>
</a><br>

<img src="<?php echo $_GET['imgLocatie'] ?>" alt="back_blue.png" width="120" height="200"> &nbsp;
<img src="<?php echo $_GET['imgLocatie1'] ?>" alt="back_gray.png" width="120" height="200"> &nbsp;
<img src="<?php echo $_GET['imgLocatie2'] ?>" alt="back_green.png" width="120" height="200"> &nbsp;
<img src="<?php echo $_GET['imgLocatie3'] ?>" alt="back_purple.png" width="120" height="200"> &nbsp;

<br>
<?php
if (isset($_GET['imgLocatie'])) {
    print_r($_GET);
    echo "<br>";
    echo "imgLocatie: " . $_GET['imgLocatie'];
    echo str_replace("back", "Toprak", "back_blue.png");
}
?>
<br>

<!--Opdracht-13:-->
<?php echo "Opdracht-13: \r\n"; ?><br>
<?php
$bestandInhoud = file_get_contents("img/content.txt");
 echo  $bestandInhoud;
?>
<br>
<br>

<!--Opdracht-14:-->
<?php echo "Opdracht-14: \r\n"; ?><br>
<?php
echo '<form>';
echo   '<textarea name="OPDR14" rows="15" cols="50">'. $bestandInhoud . '</textarea>';
echo '</forml>'
?>
<br>

<!--Opdracht-15:-->
<?php echo "Opdracht-15: \r\n"; ?><br>
<br>
<?php
$bestandInhoud1 = file_get_contents("index.php");
$bestandInhoud2 = htmlentities($bestandInhoud1);

    echo '<form>';
    echo   '<textarea name="OPDR14" rows="20" cols="100">'. $bestandInhoud2 . '</textarea>';
    echo '</form>'
?>

<br>

<!--Opdracht-16:-->
<?php echo "Opdracht-16: \r\n";
echo "Lees bestand img/content.txt en zet deze in kopie.txt"
?><br>
<?php
$inhoud2 = file_get_contents("img/content.txt");
file_put_contents("kopie.txt", $inhoud2);
?>
<br>


<!--Opdracht-17:-->
<?php echo "Opdracht-17: \r\n";
echo " Maak een formulier waarbij de inhoud van een textarea geschreven wordt naar het 
bestand opdracht17.txt. "
?><br>


<br>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST);
    echo "<br>";
    if (isset($_POST['opdr17'])) {
        $inhoudUserInput = $_POST["opdr17"];
        file_put_contents("opdracht17.txt", $inhoudUserInput);
    }
}
?>


<!--Opdracht-1888git:-->
<?php echo "Opdracht-18: \r\n"; ?><br>
<?php
$inhoudOpdracht17 = file_get_contents("opdracht17.txt");

echo '<form>';
echo   '<textarea name="opdr18" rows="10" cols="30">'. $inhoudOpdracht17 . '</textarea>';
echo '</form>'

?>
<br>



