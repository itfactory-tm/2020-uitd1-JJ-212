<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/webBureau.css">
    <link rel="stylesheet" href="dist/css/stylish-portfolio.min.css">

    <title>Formulierverwerking</title>
</head>

<body>
    <h1>Contactverwerking</h1>
    <p>Dank u wel om contact op te nemen met CodeDesign. Wij lezen en beantwoorden zo spoedig mogenlijk al jullie berichten.</p>
    Met vriendelijke groeten het CodeDesign team
    <a href="index.html">Home</a>
    <hr>
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
