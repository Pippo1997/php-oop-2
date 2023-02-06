<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include __DIR__ .'/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>php oop 2</title>
</head>

<body>
    <div id="app">

        <div class="container">
            <div class="row">
                <!-- CIBO -->
                <?php foreach($arrayCibo as $cibo) { ?>
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="<?php echo $cibo->immagine ?>" alt="card img">
                        <div class="card-body">
                            <h3><?php echo $cibo->nome ?></h3>
                            <div class="card-text">
                                <span><?php echo $cibo->tipo ?></span>
                            </div>
                            <div class="card-text">Prezzo:
                                <span><?php echo $cibo->prezzo ?></span>
                            </div>
                            <div class="card-text">Peso:
                                <span><?php echo $cibo->peso ?></span>
                            </div>
                            <div class="card-text">Ingredienti:
                                <span><?php echo $cibo->ingredienti ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- ALTRO -->
                <?php foreach($arrayAltro as $altro) { ?>
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="<?php echo $altro->immagine ?>" alt="card img">
                        <div class="card-body">
                            <h3><?php echo $altro->nome ?></h3>
                            <div class="card-text">
                                <span><?php echo $altro->tipo ?></span>
                            </div>
                            <div class="card-text">Prezzo:
                                <span><?php echo $altro->prezzo ?></span>
                            </div>
                            <div class="card-text">Dimensioni:
                                <span><?php echo $altro->dimensioni ?></span>
                            </div>
                            <div class="card-text">Materiale:
                                <span><?php echo $altro->materiale ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- GIOCHI -->
                <?php foreach($arrayGiochi as $giochi) { ?>
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="<?php echo $giochi->immagine ?>" alt="card img">
                        <div class="card-body">
                            <h3><?php echo $giochi->nome ?></h3>
                            <div class="card-text">
                                <span><?php echo $giochi->tipo ?></span>
                            </div>
                            <div class="card-text">Prezzo:
                                <span><?php echo $giochi->prezzo ?></span>
                            </div>
                            <div class="card-text">Dimensioni:
                                <span><?php echo $giochi->dimensioni ?></span>
                            </div>
                            <div class="card-text">Caratteristiche:
                                <span><?php echo $giochi->caratteristiche ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
    <script src="./js/script.js"></script>
</body>

</html>