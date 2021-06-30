<main>
    <section id="card_container">
    <?php foreach($albums as $album){ ?>
        <div class="disk_container">
            <img src="<?= $album["poster"];?>" alt="">
            <h2><?= $album["title"];?></h2>
            <h3><?= $album["author"];?></h3>
            <p><?= $album["year"];?></p>
        </div>
    <?php 
    }
    ?>
    </section>
</main>