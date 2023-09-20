<?php
require_once "../models/actorModel.php";
$allActor = Actor::findAllactor();
?>
<?php require_once "inc/header.php"; ?>
    <title>Document</title>
<?php require_once "inc/nav.php"; ?>
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
                        <td><a href="info.php?id_actor=<?=$actor['id_actor'];?>&&type=actor">info actor</a></td>
                        <td><a href="traitement/action.php?id_actor=<?=$actor['id_actor'];?>">delet</a></td>
                        <td><a href="update.php?id_actor=<?=$actor['id_actor'];?>&&type=actor&&name=<?= $actor['name']; ?>&&email=<?= $actor['email']; ?>">update</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </thead>
    </table>
<?php require_once "inc/footer.php"; ?>