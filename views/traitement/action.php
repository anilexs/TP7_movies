<?php
require_once "../../models/database.php";
require_once "../../models/filmModel.php";
require_once "../../models/actorModel.php";
if(isset($_POST['film'])){
    $title = htmlspecialchars($_POST['title']);
    $number_main_actors = htmlspecialchars($_POST['number_main_actors']);
    $number_total_actors = htmlspecialchars($_POST['number_total_actors']);
    Film::addFilm($title, $number_main_actors, $number_total_actors);

}   

if(isset($_POST['film'])){
    $name = htmlspecialchars($_POST['number_main_actors']);
    $email = htmlspecialchars($_POST['number_total_actors']);
    Actor::addActor($name, $email);
}   

if(isset($_GET['id_actor'])){
    $id = htmlspecialchars($_GET['id']);
    Actor::deleteActorById($id);
}   

if(isset($_GET['id_film'])){
    $id = htmlspecialchars($_GET['id_film']);
    Film::deleteFilmById($id);
}   

if(isset($_POST['updateFilm'])){
    $id = htmlspecialchars($_POST['id_film']);
    $title = htmlspecialchars($_POST['title']);
    $number_main_actors = htmlspecialchars($_POST['number_main_actors']);
    $number_total_actors = htmlspecialchars($_POST['number_total_actors']);
    Film::updateFilmById($title, $number_main_actors, $number_total_actors, $id);
}   

if(isset($_POST['updateActor'])){
    $id = htmlspecialchars($_POST['id_actor']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    Actor::updateActorById($name, $email, $id);
}   
