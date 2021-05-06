<?php
// Functie om antwoorden te randomizen.
function shuffle_assoc(&$array)
{
    $keys = array_keys($array);
    shuffle($keys);
    foreach ($keys as $key) {
        $new[$key] = $array[$key];
    }
    $array = $new;
    return true;
} // Einde randomizen.

// Array als "database".
$topo = [
    "Groningen" => ["Groningen" => true, "Leeuwarden" => false, "Hoogenveen" => false, "Winsum" => false],
    "Friesland" => ["Leeuwarden" => true, "Groningen" => false, "Sneek" => false, "Bolsward" => false],
    "Drenthe" => ["Emmen" => false, "Assen" => true, "Zwolle" => false, "Zuidwolde" => false],
    "Overijssel" => ["Assen" => false, "Zwolle" => true, "Deventer" => false, "Enschede" => false],
    "Flevoland" => ["Lelystad" => true, "Dronten" => false, "Almere" => false, "Alkmaar" => false],
    "Gelderland" => ["Nijmegen" => false, "Arnhem" => true, "Wageningen" => false, "Utrecht" => false],
    "Utrecht" => ["Utrecht" => true, "Soest" => false, "Zeist" => false, "Zwolle" => false],
    "Noord-Holland" => ["Amsterdam" => false, "Haarlem" => true, "Den Haag" => false, "Enkhuizen" => false],
    "Zuid-Holland" => ["Den Haag" => true, "Rotterdam" => false, "Amsterdam" => false, "Leiden" => false],
    "Zeeland" => ["Domburg" => false, "Middelburg" => true, "Vlissingen" => false, "Goes" => false],
    "Noord-Brabant" => ["Den Bosch" => true, "Oss" => false, "Maastricht" => false, "Boxmeer" => false],
    "Limburg" => ["Roermond" => false, "Maastricht" => true, "Venlo" => false, "Den Bosch" => false]
];
// Einde database

// terugkeren naar beginpagina.
if (isset($_POST['return'])) {
    header("Location: /index.php");
    die();
}

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topotrainer</title>
    <style>
        div.background {
            background-image: url("topotrainer_bg.jpg");
            border: 2px solid black;
        }

        div.transbox {
            margin: 60px;
            background-color: #ffffff;
            border: 1px solid black;
            opacity: 0.7;
        }

        div.transbox p,
        form,
        h1 {
            margin: 5%;
            font-weight: bold;
            color: #000000;
        }

        h1 {
            text-align: center;
        }

        .image {
            margin: 60px;
            float: right;
            top: 0;
            padding: 5px;
            background-color: #cae8ca;
            border: 2px solid #4CAF50;
            opacity: 10;
        }

        .red {
            color: black;
            background-color: red;
        }

        .green {
            color: black;
            background-color: green;
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="transbox">
            <h1>Leer de hoofdsteden van de nederlandse provincies.</h1>
            <img class="image" src="Nederland.png" width="600" height="700" alt="Kaart van Nederland">
            <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <?php

                $aantal_correct = 0;
                foreach ($topo as $provincie => $antwoorden) {
                    echo "<h2>Wat is de hoofdstad van $provincie?</h2>";
                    shuffle_assoc($antwoorden);
                    foreach ($antwoorden as $stad => $correct) {
                        echo "<input type='radio' name='$provincie' id='$stad' value='$stad'>";
                        if (isset($_POST[$provincie]) && $_POST[$provincie] === $stad) {
                            if ($correct) {
                                $c = "green";
                                $aantal_correct++;
                            } else {
                                $c = "red";
                            }
                            echo "<label class='$c' for='$stad'>$stad</label><br>";
                        } else {
                            echo "<label for='$stad'>$stad</label><br>";
                        }
                    };
                    if (isset($_POST[$provincie])) {
                        echo "<div><br>Gegeven antwoord: $_POST[$provincie]</div>";
                        foreach ($antwoorden as $stad => $correct) {
                            if ($correct) {
                                echo "<div>Het goede antwoord was: $stad</div>";
                            }
                        }
                    };
                };
                if ($aantal_correct > 0) {
                    $score = round(($aantal_correct / count($topo) * 100));
                    echo "<br>Aantal goede antwoorden: $aantal_correct // Je hebt $score% gehaald.";
                    if ($score >= 60) {
                        echo "<br><br><h2>PROFICIAT!</h2><br>";
                    } else {
                        echo "<br><br><h2>Je moet nog een paar keer oefenen.....</h2><br>";
                ?>
                        <a href="http://localhost:/index.php">Klik hier om terug te keren naar de beginpagina</a>
                <?php
                    }
                }
                if (isset($_POST[$provincie])) {
                    echo "<input type='submit' value = 'Hoeveel heb ik er goed???' style='color: transparent; background-color: transparent; border-color: transparent; cursor: default;' disabled>";
                } else {

                    echo "<br><input type='submit' value = 'Hoeveel heb ik er goed???'>";
                }
                ?>

                <br>

            </form>
        </div>
    </div>
</body>

</html>