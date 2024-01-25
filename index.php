<?php
    include('./header.php');
    include ('./oeuvres.php');
?>
<main>
    <div id="liste-oeuvres">
        <?php foreach ($oeuvres as $item) {?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?php echo $item['id']?>">
                    <img src="<?php echo $item['image']?>" alt="<?php echo $item['alt']?>">
                    <h2><?php echo $item['title']?></h2>
                    <p class="description"><?php echo $item['artist']?></p>
                </a>
            </article>
        <?php }?>
    </div>
</main>
<?php include('footer.php') ?>