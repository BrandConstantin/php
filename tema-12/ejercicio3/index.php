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
    </head>
    <body>
        <div id="container">
            <h1>Conversor:</h1>
            <form action="./conversor.php" method="get">
                <select name="conversor">
                    <option selected disabled value="">Conversor</option>
                    <option value='euros' >Euros</option>
                    <option value='pesetas'>Pesetas</option>
                </select>
                <input type="number" value="cantidad" id="cantidad" placeholder="cantidad">
                <input type="submit" value="Enviar" id="enviar">
            </form>
        </div>
    </body>
</html>
