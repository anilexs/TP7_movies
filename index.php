<?php
require_once "models/actorModel.php";
require_once "models/filmModel.php";
$allFilm = Film::findAllFilm();
$allActor = Actor::findAllactor();
?>
<?php require_once "views/inc/header.php"; ?>
    <link rel="stylesheet" href="views/asset/css/index.css">
    <title>Document</title>
<?php require_once "views/inc/nav.php"; ?>
    <div class="contenaire">
        <div class="tab">
            <table>
                <thead>
                    <tr>
                        <td>name</td>
                        <td>email</td>
                    </tr>
                    <tbody>
                        <?php foreach($allActor as $actor){?>
                            <tr>
                                <td><?= $actor['name']; ?></td>
                                <td><?= $actor['email']; ?></td>
                                <td><a href="views/info.php?id_actor=<?=$actor['id_actor'];?>&&type=actor">info actor</a></td>
                                <td><a href="views/traitement/action.php?id_actor=<?=$actor['id_actor'];?>">delet</a></td>
                                <td><a href="views/update.php?id_actor=<?=$actor['id_actor'];?>&&type=actor&&name=<?= $actor['name']; ?>&&email=<?= $actor['email']; ?>">update</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </thead>
            </table>
        </div>
        <div class="tab">
            <table>
                <thead>
                    <tr>
                        <td>title</td>
                        <td>number main actors</td>
                        <td>number total actors</td>
                    </tr>
                    <tbody>
                        <?php foreach($allFilm as $film){?>
                            <tr>
                                <td><?= $film['title']; ?></td>
                                <td><?= $film['number_main_actors']; ?></td>
                                <td><?= $film['number_total_actors']; ?></td>
                                <td><a href="views/?=$film['id_film'];?>&&type=film">info film</a></td>
                                <td><a href="views/traitement/action.php?id_film=<?=$film['id_film'];?>">delet</a></td>
                                <td><a href="views/update.php?id_film=<?=$film['id_film'];?>&&type=film&&title=<?= $film['title']; ?>&&main=<?=$film['number_main_actors'];?>&&total=<?= $film['number_total_actors']; ?>">update</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
<?php require_once "views/inc/footer.php"; ?>