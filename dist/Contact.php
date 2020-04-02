<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/webBureau.css">
    <link rel="stylesheet" type="text/css" href="/css/stylish-portfolio.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <title>Formulierverwerking</title>
    <style>
        /*Contact Huisstijlen*/
        .headingContact {
            font-family: 'Noto Sans TC', sans-serif, Arial, Verdana;
            font-weight: bold;
            text-align: center;
            color: palegoldenrod;
            margin: 0 auto;
        }

        .card {
            width: 400px;
            height: auto;
            background-image: linear-gradient(#aaa, #444);
            border-radius: 10px;
            box-shadow: 5px 10px 18px palegoldenrod;
            text-align: center;
            margin: 0 auto;
        }

        .textContact {
            font-family: 'Noto Sans TC', sans-serif, Arial, Verdana;
            text-align: center;
        }

        p,
        a {
            text-align: center;
        }

        .center {
            text-align: center;
            margin: 0 auto;
        }

        .btn {
            width: 100px;
            height: auto;
            font-family: 'Noto Sans TC', sans-serif, Arial, Verdana;
            margin: 0 auto;
            text-align: center;
            text-decoration: none;
            color: white;


        }

        .btn:hover {
            color: palegoldenrod;
        }

        body {
            background-image: url(img/roughcloth.png);
        }

    </style>
</head>

<body>
    <div class="card">
        <h1 class="headingContact">Contactverwerking</h1>
    </div>
    <p class="textContact">Dank u wel om contact op te nemen met CodeDesign. Wij lezen en beantwoorden zo spoedig mogelijk al jullie berichten.</p>
    <p> Met vriendelijke groeten het <br>CodeDesign team</p>

    <br>
    <p>Klik op volgende link om terug naar de homepagina te gaan </p>
    <div class="card">
        <a class="center btn" href="uitdaging1.html">Home</a>
    </div>
    <hr width="50%">
    <?php
if (isset($_POST["gebruikersnaam"]) && $_POST["gebruikersnaam"] != "") {
    echo "<p> Ingevuld bij naam: " . $_POST["gebruikersnaam"] . "</p>\n";
}

if (isset($_POST["email"]) && $_POST["email"] != "") {
    echo "<p> Ingevuld bij email: " . $_POST["email"] . "</p>\n";
}
if (isset($_POST["number"]) && $_POST["number"] != "") {
    echo "<p> Ingevuld bij waardering " . $_POST["number"] . "</p>\n";
}
if (isset($_POST["opmerking"]) && $_POST["opmerking"] != "") {
    echo "<p> Ingevuld bij opmerking " . $_POST["opmerking"] . "</p>\n";
} 


?>

</body>

</html>
