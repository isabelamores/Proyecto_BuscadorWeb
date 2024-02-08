<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Catalogo</title>
</head>
<body>
    <?php
    include 'menu.html';
    ?>
    <br><br>
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="images/Cappuccino.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cappuccino</h5>
              <p class="card-text">El capuchino ​es una bebida nacida en Austria, preparada con café expresso y leche montada con vapor para darle cremosidad.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/caramel.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Caramel macchiato</h5>
              <p class="card-text">Latte Macchiato significa en italiano leche manchada. Es un café con base de espresso más dulce y con más capas.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/expresso.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Expresso</h5>
              <p class="card-text">El café espresso es una forma concentrada de café que se sirve en medidas con los granos de café molidos. </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/mocha.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mocha</h5>
              <p class="card-text">Un café moca es una variante del café con leche.Una medida de espresso con chocolate en polvo seguido de leche.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>