<?php 
    require __DIR__."/database/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-ajax-Dischi</title>
</head>
<body>
    <header></header>
    <main>
        <section id="card_container">
        <?php foreach($albums as $album){ ?>
            <div class="disk_container">
                <img src="<?= $album["poster"];?>" alt="">
                <h3><?= $album["title"];?></h3>
                <h4><?= $album["author"];?></h4>
                <p><?= $album["year"];?></p>
            </div>
        <?php 
        }
        ?>
        </section>
    </main>
    <footer></footer>
</body>
</html>