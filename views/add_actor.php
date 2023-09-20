<?php require_once "inc/header.php"; ?>
    <title>Document</title>
<?php require_once "inc/nav.php"; ?>
    <form action="traitement/action.php" method="post">
        <div>
            <label for="">name :</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">email :</label>
            <input type="text" name="email" id="">
        </div>
        <button name="actor">ajouter un acteur</button>
    </form>
<?php require_once "inc/footer.php"; ?>