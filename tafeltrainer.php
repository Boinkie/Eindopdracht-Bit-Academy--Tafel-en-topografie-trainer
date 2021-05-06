<?php
session_start();
// zorgen dat $_POST['action'] niet wordt overschreven na gebruik submit-button
if (!empty($_POST['action'])) {
    $_SESSION['action'] = $_POST['action'];
}

// Database van sommen
$table_one[] = ["question" => "1 X 1", "answer" => "1"];
$table_one[] = ["question" => "2 X 1", "answer" => "2"];
$table_one[] = ["question" => "3 X 1", "answer" => "3"];
$table_one[] = ["question" => "4 X 1", "answer" => "4"];
$table_one[] = ["question" => "5 X 1", "answer" => "5"];
$table_one[] = ["question" => "6 X 1", "answer" => "6"];
$table_one[] = ["question" => "7 X 1", "answer" => "7"];
$table_one[] = ["question" => "8 X 1", "answer" => "8"];
$table_one[] = ["question" => "9 X 1", "answer" => "9"];
$table_one[] = ["question" => "10 X 1", "answer" => "10"];
$table_two[] = ["question" => "2 X 1", "answer" => "2"];
$table_two[] = ["question" => "2 X 2", "answer" => "4"];
$table_two[] = ["question" => "3 X 2", "answer" => "6"];
$table_two[] = ["question" => "4 X 2", "answer" => "8"];
$table_two[] = ["question" => "5 X 2", "answer" => "10"];
$table_two[] = ["question" => "6 X 2", "answer" => "12"];
$table_two[] = ["question" => "7 X 2", "answer" => "14"];
$table_two[] = ["question" => "8 X 2", "answer" => "16"];
$table_two[] = ["question" => "9 X 2", "answer" => "18"];
$table_two[] = ["question" => "10 X 2", "answer" => "20"];
$table_three[] = ["question" => "1 X 3", "answer" => "3"];
$table_three[] = ["question" => "2 X 3", "answer" => "6"];
$table_three[] = ["question" => "3 X 3", "answer" => "9"];
$table_three[] = ["question" => "4 X 3", "answer" => "12"];
$table_three[] = ["question" => "5 X 3", "answer" => "15"];
$table_three[] = ["question" => "6 X 3", "answer" => "18"];
$table_three[] = ["question" => "7 X 3", "answer" => "21"];
$table_three[] = ["question" => "8 X 3", "answer" => "24"];
$table_three[] = ["question" => "9 X 3", "answer" => "27"];
$table_three[] = ["question" => "10 X 3", "answer" => "30"];
$table_four[] = ["question" => "1 X 4", "answer" => "4"];
$table_four[] = ["question" => "2 X 4", "answer" => "8"];
$table_four[] = ["question" => "3 X 4", "answer" => "12"];
$table_four[] = ["question" => "4 X 4", "answer" => "16"];
$table_four[] = ["question" => "5 X 4", "answer" => "20"];
$table_four[] = ["question" => "6 X 4", "answer" => "24"];
$table_four[] = ["question" => "7 X 4", "answer" => "28"];
$table_four[] = ["question" => "8 X 4", "answer" => "32"];
$table_four[] = ["question" => "9 X 4", "answer" => "36"];
$table_four[] = ["question" => "10 X 4", "answer" => "40"];
$table_five[] = ["question" => "1 X 5", "answer" => "5"];
$table_five[] = ["question" => "2 X 5", "answer" => "10"];
$table_five[] = ["question" => "3 X 5", "answer" => "15"];
$table_five[] = ["question" => "4 X 5", "answer" => "20"];
$table_five[] = ["question" => "5 X 5", "answer" => "25"];
$table_five[] = ["question" => "6 X 5", "answer" => "30"];
$table_five[] = ["question" => "7 X 5", "answer" => "35"];
$table_five[] = ["question" => "8 X 5", "answer" => "40"];
$table_five[] = ["question" => "9 X 5", "answer" => "45"];
$table_five[] = ["question" => "10 X 5", "answer" => "50"];
$table_six[] = ["question" => "1 X 6", "answer" => "6",];
$table_six[] = ["question" => "2 X 6", "answer" => "12"];
$table_six[] = ["question" => "3 X 6", "answer" => "18"];
$table_six[] = ["question" => "4 X 6", "answer" => "24"];
$table_six[] = ["question" => "5 X 6", "answer" => "30"];
$table_six[] = ["question" => "6 X 6", "answer" => "36"];
$table_six[] = ["question" => "7 X 6", "answer" => "42"];
$table_six[] = ["question" => "8 X 6", "answer" => "48"];
$table_six[] = ["question" => "9 X 6", "answer" => "54"];
$table_six[] = ["question" => "10 X 6", "answer" => "60"];
$table_seven[] = ["question" => "1 X 7", "answer" => "7"];
$table_seven[] = ["question" => "2 X 7", "answer" => "14"];
$table_seven[] = ["question" => "3 X 7", "answer" => "21"];
$table_seven[] = ["question" => "4 X 7", "answer" => "28"];
$table_seven[] = ["question" => "5 X 7", "answer" => "35"];
$table_seven[] = ["question" => "6 X 7", "answer" => "42"];
$table_seven[] = ["question" => "7 X 7", "answer" => "49"];
$table_seven[] = ["question" => "8 X 7", "answer" => "56"];
$table_seven[] = ["question" => "9 X 7", "answer" => "63"];
$table_seven[] = ["question" => "10 X 7", "answer" => "70"];
$table_eight[] = ["question" => "1 X 8", "answer" => "8"];
$table_eight[] = ["question" => "2 X 8", "answer" => "16"];
$table_eight[] = ["question" => "3 X 8", "answer" => "24"];
$table_eight[] = ["question" => "4 X 8", "answer" => "32"];
$table_eight[] = ["question" => "5 X 8", "answer" => "40"];
$table_eight[] = ["question" => "6 X 8", "answer" => "48"];
$table_eight[] = ["question" => "7 X 8", "answer" => "56"];
$table_eight[] = ["question" => "8 X 8", "answer" => "64"];
$table_eight[] = ["question" => "9 X 8", "answer" => "72"];
$table_eight[] = ["question" => "10 X 8", "answer" => "80"];
$table_nine[] = ["question" => "1 X 9", "answer" => "9"];
$table_nine[] = ["question" => "2 X 9", "answer" => "18"];
$table_nine[] = ["question" => "3 X 9", "answer" => "27"];
$table_nine[] = ["question" => "4 X 9", "answer" => "36"];
$table_nine[] = ["question" => "5 X 9", "answer" => "45"];
$table_nine[] = ["question" => "6 X 9", "answer" => "54"];
$table_nine[] = ["question" => "7 X 9", "answer" => "63"];
$table_nine[] = ["question" => "8 X 9", "answer" => "72"];
$table_nine[] = ["question" => "9 X 9", "answer" => "81"];
$table_nine[] = ["question" => "10 X 9", "answer" => "90"];
$table_ten[] = ["question" => "1 X 10", "answer" => "10"];
$table_ten[] = ["question" => "2 X 10", "answer" => "20"];
$table_ten[] = ["question" => "3 X 10", "answer" => "30"];
$table_ten[] = ["question" => "4 X 10", "answer" => "40"];
$table_ten[] = ["question" => "5 X 10", "answer" => "50"];
$table_ten[] = ["question" => "6 X 10", "answer" => "60"];
$table_ten[] = ["question" => "7 X 10", "answer" => "70"];
$table_ten[] = ["question" => "8 X 10", "answer" => "80"];
$table_ten[] = ["question" => "9 X 10", "answer" => "90"];
$table_ten[] = ["question" => "10 X 10", "answer" => "100"];

// de gekozen tafel bepalen
if (isset($_POST['action'])) {
    $table = $_POST['action'];
} else {
    if (isset($_SESSION['action'])) {
        $table = $_SESSION['action'];
    } else {
        $_SESSION['action'] = "";
    }
}

$image = "congrats.jpg";

// bepalen van de juiste array met sommen na keuze voor de tafel
switch ($table) {
    case 1:
        $sums = $table_one;
        break;
    case 2:
        $sums = $table_two;
        break;
    case 3:
        $sums = $table_three;
        break;
    case 4:
        $sums = $table_four;
        break;
    case 5:
        $sums = $table_five;
        break;
    case 6:
        $sums = $table_six;
        break;
    case 7:
        $sums = $table_seven;
        break;
    case 8:
        $sums = $table_eight;
        break;
    case 9:
        $sums = $table_nine;
        break;
    case 10:
        $sums = $table_ten;
        break;
} // einde keuze tafel
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tafeltrainer</title>
    <style>
        div.background {
            background-image: url("tafeltrainer_bg.jpg");
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

        h1,
        h2,
        p,
        form {
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

        #submit_form {
            width: 60px;
            height: 30px;
            background-color: pink;
        }

        #submit_form:hover {
            background-color: #4CAF50;
        }

        input[type='radio'],
        label {
            font-size: 20px;
            vertical-align: baseline;
            padding: 10px;
            margin: 10px;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
        }


        .answer,
        .ready {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: x-large;
        }

        cursor {
            cursor: pointer;
        }
    </style>

</head>

<body>

    <?php
    // if voor kiezen van tafel
    if (!isset($_POST['submit'])) { ?>
        <div class="background">
            <div class="transbox">
                <h1>Oefen met de tafels.</h1><br><br>

                <h2>Welke tafel wil je kiezen?</h2><br><br>

                <div class="column">
                    <div class="form-field">
                        <form id="form_1" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                            <fieldset class="table_choice">
                                <label><input type="radio" class="radio" name="action" id="1" value="1" required>De tafel van 1.</label><br>
                                <label><input type="radio" class="radio" name="action" id="2" value="2">De tafel van 2.</label><br>
                                <label><input type="radio" class="radio" name="action" id="3" value="3">De tafel van 3.</label><br>
                                <label><input type="radio" class="radio" name="action" id="4" value="4">De tafel van 4.</label><br>
                                <label><input type="radio" class="radio" name="action" id="5" value="5">De tafel van 5.</label><br>
                                <label><input type="radio" class="radio" name="action" id="6" value="6">De tafel van 6.</label><br>
                                <label><input type="radio" class="radio" name="action" id="7" value="7">De tafel van 7.</label><br>
                                <label><input type="radio" class="radio" name="action" id="8" value="8">De tafel van 8.</label><br>
                                <label><input type="radio" class="radio" name="action" id="9" value="9">De tafel van 9.</label><br>
                                <label><input type="radio" class="radio" name="action" id="10" value="10">De tafel van 10.</label><br><br>
                            </fieldset>
                            <input type="submit" name="submit" value="Beginnen maar!">
                            <input type="hidden" id="submit_form" name="table" value="<?php echo $table; ?>">
                        </form>
                    </div>
                    <?php
                } else { // else voor weergeven sommen
                    $currentQuestion = 0;
                    $answers = 0;

                    if (isset($_POST["currentQuestion"])) {
                        $currentQuestion = $_POST["currentQuestion"];
                        $answers = $_POST["answers"];
                        if ($_POST["guess"] == ($sums[($currentQuestion)]["answer"])) {
                            $currentQuestion++;
                            $answers++;
                            if ($currentQuestion < 10) {
                                echo "<p class='answer'>proficiat, dit antwoord was juist!</p>" . PHP_EOL;
                            }
                        } else {
                            $answers++;
                            echo "<p class='answer'>helaas, probeer het nog eens</p>" . PHP_EOL;
                        }
                    }
                    echo "</div>"; // div class column


                    if ($currentQuestion == 10) {
                        echo "<p class = 'ready'>Goed gedaan, je bent klaar!</p>" . PHP_EOL;
                        echo "<p class = 'ready'>Je had 10 goed van de " . $answers . " keer.</p>" . PHP_EOL;
                        echo "<p class = 'ready'>Je score is: " . round(10 / $answers * 100) . "% </p>" . PHP_EOL;
                        echo "<img src='$image' class='center' alt='Een plaatje met daarop gefeliciteerd!'>";
                    ?>
                        <form action="index.php">
                            <label for='return'>Druk hier om naar de beginpagina terug te keren</label>
                            <input type='submit' id='return' name='return' value="Keer terug">
                        </form>
                    <?php
                    } else { // invoerveld met som.
                    ?>
                        <div class="background">
                            <div class="transbox">
                                <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">

                                    <label for="question"><?php echo "Som " . ($currentQuestion + 1) . " -->   " . $sums[$currentQuestion]["question"]; ?></label>
                                    <input type="hidden" name="currentQuestion" value="<?php echo $currentQuestion; ?>">
                                    <input type="hidden" name="answers" value="<?php echo $answers; ?>">
                                    <input type="text" name="guess" id="question" value="" placeholder="Vul een getal in.">
                                    <input type="submit" name="submit">
                                </form>
                            </div>
                        </div>
                <?php
                    } // einde else invoerveld met som
                } // einde else weergeven van sommen
                ?>

                </div>
            </div>
        </div>
</body>

</html>