<?php
    global $oeuvres;
    include('./header.php');
    include('./oeuvres.php');

    // Correction : Si l'URL ne contient pas l'ID, redirection vers la page d'accueil
    if (empty($_GET['id'])) {
        header('Location: index.php');
    }

    $id = $_GET['id'];
    $oeuvre = null;

    // Je parcours les œuvres
    foreach($oeuvres as $item) {

        if ($item['id'] == $id) {
            echo true;
            $oeuvre = $item;
        }
    }
?>
    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo $oeuvre['image']?>" alt="<?php echo $oeuvre['alt']?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $oeuvre['title']?></h1>
                <p class="description"><?php echo $oeuvre['artist']?></p>
                <p class="description-complete"><?php echo $oeuvre['description']?></p>
            </div>
        </article>
    </main>
<?php include('footer.php') ?>