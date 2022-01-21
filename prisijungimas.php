<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prisijungimas</title>
    </head>
    <body>
        <form action="prisijungimas.php" method="POST">
            <input type="text" name="vardas">
            <label for="vardas">Vartotojo vardas</label></br>
            <input type="password" name="slaptazodis">
            <label for="slaptazodis">Slaptazodis</label></br>
            <input type="submit" value="Prisijungti" >
        </form>

<?php
if (isset($_POST["vardas"])){   
$link = mysqli_connect("localhost", "root", '', 'el_parduotuve');
$sql = "SELECT vardas, slaptazodis
FROM vartotojai WHERE vardas='".$_POST["vardas"]."' AND slaptazodis='".$_POST["slaptazodis"]."'";
$result = mysqli_query($link, $sql);



if (mysqli_num_rows($result) <1) {
    echo "Neteisingi duomenys";
}
    else {
    setcookie("vardas", $_POST['vardas'], time()+ 3600 * 4);
    $link = mysqli_connect("localhost", "root", '', 'el_parduotuve');
    $sql = "SELECT id
    FROM vartotojai WHERE vardas='".$_POST["vardas"]."'";
    $result = mysqli_query($link, $sql);
    if ($result) {
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    setcookie("id", $row['id'], time()+ 3600 * 4);
    }
}
    header("Location: index.php");
    } 

}

?>

   </body>  
</html>
        

