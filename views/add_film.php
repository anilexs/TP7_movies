<?php require_once "inc/header.php"; ?>
    <title>Document</title>
<?php require_once "inc/nav.php"; 
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";die;
?>
    <form action="./traitement/action.php" method="post">
        <div>
            <label for="">title :</label>
            <input type="text" name="title" id="">
        </div>
        <div>
            <label for="">number main actors</label>
            <input type="number" name="number_main_actors" id="">
        </div>
        <div>
            <label for="">number total actors</label>
            <input type="number" name="number_total_actors" id="">
        </div>
        <button name="film">Ajouter un film</button>
    </form>
<?php require_once "inc/footer.php"; ?>