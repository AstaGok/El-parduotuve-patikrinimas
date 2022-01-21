<?php


if (isset($_POST["submit"])) {
    $avgAtsiliepimai = array_sum($_POST)/5;
    $link=mysqli_connect("localhost","root","","el_parduotuve");
    $sql="INSERT INTO vertinimas VALUES('".$_COOKIE["vardas"]."','".$avgAtsiliepimai."')";
mysqli_query($link, $sql);
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>DEMO ShopCart</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
   <h4 align="center" style="padding-top: 2em;"><?php echo "Jusu ivertinimo vidurkis = " . $avgAtsiliepimai; ?></h4>
   <p align="center">Aciu uz atsiliepima, noredami apsipirkti, spauskite mygtuka Toliau</p>
   <h2 align="center"><a href="rezultatas.php">Toliau</a></h2>

    </body>
</html>