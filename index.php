<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {
                background-color: #D2E8BD;
            }
            label {
                font-weight: bold;
                text-transform: uppercase;
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <h2 style="text-align: center;">Kaip vertinate el.parduotuvę</h2><br>
    <form action="atsiliepimas.php" method="POST" style="text-align: center;">
        <label for="puslapis-1">Kaip vertinate funkcionalumą?</label><br>
    <select id='1' name="1">
       <option value="">---Pasirinkite---</option>
       <option value="1">Labai blogai</option>
       <option value="2">Blogai</option>
       <option value="3">Vidutiniškai</option>
       <option value="4">Gerai</option>
       <option value="5">Labai gerai</option>
    </select> <br>
        <label for="puslapis-2">Kaip vertinate prekių pristatymą?</label><br>
    <select id='2' name="2">
       <option value="">---Pasirinkite---</option>
       <option value="1">Labai blogai</option>
       <option value="2">Blogai</option>
       <option value="3">Vidutiniškai</option>
       <option value="4">Gerai</option>
       <option value="5">Labai gerai</option>
    </select> <br>
        <label for="puslapis-3">Kaip vertinate aptarnavimą?</label><br>
    <select  id='3' name="3">
       <option value="">---Pasirinkite---</option>
       <option value="1">Labai blogai</option>
       <option value="2">Blogai</option>
       <option value="3">Vidutiniškai</option>
       <option value="4">Gerai</option>
       <option value="5">Labai gerai</option>
    </select> <br>
        <label for="puslapis-4">Kaip vertinate prekių kokybę?</label><br>
    <select id='4' name="4">
       <option value="">---Pasirinkite---</option>
       <option value="1">Labai blogai</option>
       <option value="2">Blogai</option>
       <option value="3">Vidutiniškai</option>
       <option value="4">Gerai</option>
       <option value="5">Labai gerai</option>
    </select> <br>
        <label for="puslapis-5">Kaip vertinate prekių kainas?</label><br>
    <select id='5' name="5">
       <option value="">---Pasirinkite---</option>
       <option value="1">Labai blogai</option>
       <option value="2">Blogai</option>
       <option value="3">Vidutiniškai</option>
       <option value="4">Gerai</option>
       <option value="5">Labai gerai</option>
    </select> <br>
    <input type="submit" id='go' name="submit" value="Pateikti"> 

    </body>
</html>
