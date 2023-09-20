<?php
require_once "../models/filmModel.php";
require_once "../models/actorModel.php";
if($_GET['type'] == "film"){
    $film = Film::findFilmById($_GET['id_film']);
}else{
    $actor = Actor::findActorById($_GET['id_actor']);
}
?>
<?php require_once "inc/header.php"; ?>
    <title>Document</title>
<?php require_once "inc/nav.php"; ?>
    <table>
        <?php if($_GET['type'] == "film"){ ?>
            <thead>
                <tr>
                    <td>title</td>
                    <td>number main actors</td>
                    <td>number total actors</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $film['title']; ?></td>
                    <td><?= $film['number_main_actors']; ?></td>
                    <td><?= $film['number_total_actors']; ?></td>
                </tr>
            </tbody>
            <?php }else{ ?>
            <thead>
                <tr>
                    <td>name</td>
                    <td>email</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $actor['name']; ?></td>
                    <td><?= $actor['email']; ?></td>
                </tr>
            </tbody>
            <?php } ?>
    </table>
<?php require_once "inc/footer.php"; ?>
