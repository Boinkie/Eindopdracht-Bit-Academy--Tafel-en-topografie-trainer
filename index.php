<?php
$var = isset($_POST['choice']) ? filter_input(INPUT_POST, 'choice') : "default-value";
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafels of Topo?</title>
    <style>
        div.background {
            background-image: url("index_bg.jpg");
            border: 2px solid black;
        }

        div.transbox {
            margin: 60px;
            background-color: #ffffff;
            border: 1px solid black;
            opacity: 0.6;
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
        h3,
        form {
            text-align: center;
        }

        label {
            font-size: large;
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="transbox">
            <h1>We gaan vandaag Tafels of Topografie oefenen.</h1>

            <h2>Wat wil je kiezen?</h2>

            <form id="form_1" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <label for="tafels">Ik ga tafels oefenen.</label>
                <input type="radio" name="choice" id="tafels" value="tafels" required><br>
                <label for="topo">Ik ga topografie oefenen.</label>
                <input type="radio" name="choice" id="topo" value="topo" required><br><br>
                <input type="submit" name="submit" value="Dit kies ik!"><br><br>
            </form>

            <?php
            $tafel_status = 'unchecked';
            $topo_status = 'unchecked';
            if (isset($_POST['submit'])) {
                $selected_radio = $_POST['choice'];

                if ($selected_radio == 'tafels') {
                    header("location: tafeltrainer.php");
                    exit();
                } else if ($selected_radio == 'topo') {
                    header("location: topotrainer.php");
                    exit();
                }
            };
            ?>
        </div>
    </div>
</body>

</html>