<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, 
che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>First Milestone</title>
</head>
<body>

    <?php 
        // I require the array from the database
        require_once __DIR__ . "/database/discsDb.php";
    ?>

    <nav>
        <div class="logo-spotify">
            <img class="wd" src="./img/spotify-logo.png" alt="Spotify Logo">
        </div>
    </nav>

    <main>
        <section class="discs-container">

            <?php
                // with foreach cycle all the array and print it
                foreach($discs as $disc) {
            ?>
            <div class="album-container">
                
                <div class="inner">
                    <img class="wd" src="<?php echo "{$disc['poster']}";?>" alt="<?php echo "{$disc['title']} Poster";?>">
                    <h2>
                        <?php
                        //  $toUpper = $disc['title'];
                        //  echo strtoupper($toUpper);
                        echo strtoupper($disc['title']);
                         ?>
                    </h2>
                    <p><?php echo "{$disc['author']}";?></p>
                    <p><?php echo "{$disc['year']}";?></p>
                </div>
    
            </div>
            <?php }; ?>

        </section>

    </main>

</body>
</html>