<?php
    require_once("data.php");
    require_once("model.php");
    $ex=find_exemplaire();
    $oeuvre=find_ouvrage();
    $pret=find_pret();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.projet3.css">
    <title>projet3</title>
</head>
<body>
    <?php
        require_once("lister.ses.prets.html.php");
    ?>
</body>
</html>