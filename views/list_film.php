<?php
require_once "../models/filmModel.php";
$allFilm = Film::findAllFilm();
?>
<?php require_once "inc/header.php"; ?>
    <title>Document</title>
<?php require_once "inc/nav.php"; ?>
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
                        <td><a href="info.php?id_film=<?=$film['id_film'];?>&&type=film">info film</a></td>
                        <td><a href="traitement/action.php?id_film=<?=$film['id_film'];?>">delet</a></td>
                        <td><a href="update.php?id_film=<?=$film['id_film'];?>&&type=film&&title=<?= $film['title']; ?>&&main=<?=$film['number_main_actors'];?>&&total=<?= $film['number_total_actors']; ?>">update</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </thead>
    </table>
<?php require_once "inc/footer.php"; ?>