<?php
require_once "../models/actorModel.php";
$allActor = Actor::findAllactor();
?>
<?php require_once "inc/header.php"; ?>
    <title>Document</title>
<?php require_once "inc/nav.php"; ?>
    <?php if($_GET['type'] == "film"){ ?>
        <form action="traitement/action.php" method="post">
            <input type="text" value="<?= $_GET['id_film']; ?>" hidden name="id_film">
            <div>
                <label for="">title :</label>
                <input type="text" name="title" id="" placeholder="<?= $_GET['title']; ?>">
            </div>
            <div>
                <label for="">number main actors</label>
                <input type="number" name="number_main_actors" id="" placeholder="<?= $_GET['main']; ?>">
            </div>
            <div>
                <label for="">number total actors</label>
                <input type="number" name="number_total_actors" id="" placeholder="<?= $_GET['total']; ?>">
            </div>
            <button name="updateFilm">update film</button>
        </form>
    <?php }else{ ?>
        <form action="traitement/action.php" method="post">
            <input type="text" value="<?= $_GET['id_actor']; ?>" hidden name="id_actor">
            <div>
                <label for="">name :</label>
                <input type="text" name="name" id="" placeholder="<?= $_GET['name']; ?>">
            </div>
            <div>
                <label for="">email</label>
                <input type="text" name="email" id="" placeholder="<?= $_GET['email']; ?>">
            </div>
            <button name="updateActor">update actor</button>
        </form>
    <?php } ?>
<?php require_once "inc/footer.php"; ?>