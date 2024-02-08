<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Recetas</title>
</head>
<body>
<?php
    include 'menu.html';
?> 
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <center><h2 >Café capuchino</h2></center><br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Ingredientes</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Unidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Leche</th>
                        <td>125</td>
                        <td>ml</td>
                    </tr>
                    <tr>
                        <th scope="row">Café expreso</th>
                        <td>25</td>
                        <td>ml</td>
                    </tr>
                    <tr>
                        <th scope="row">Canela en polvo</th>
                        <td>4.2</td>
                        <td>g</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <div class="imagen">
                <img src="images/Cappuccino.png" class="img-fluid">
            </div>
        </div>
    </div>
 <br><br>
    <div class="row">
        <div class="col-md-6">
        <center><h2 >Café Mocha</h2></center><br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Ingredientes</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Unidad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Leche</th>
                        <td>150</td>
                        <td>ml</td>
                    </tr>
                    <tr>
                        <th scope="row">Café expreso</th>
                        <td>25</td>
                        <td>ml</td>
                    </tr>
                    <tr>
                        <th scope="row">Monin Saborizante</th>
                        <td>30</td>
                        <td>ml</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <div class="imagen">
            <img src="images/mocha.jpg" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
