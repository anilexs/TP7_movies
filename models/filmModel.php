<?php 
require_once "database.php";
class Film{
    public static function addFilm($title, $number_main_actors, $number_total_actors){
        $db = Database::dbConnect();
        $request = $db->prepare("INSERT INTO film (title, number_main_actors, number_total_actors) VALUE (?, ?, ?)");
        try{
            $request->execute(array($title, $number_main_actors, $number_total_actors));
            header("Location: http://localhost/TP7_movies/index.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public static function findAllFilm(){
        $db = Database::dbConnect();
        $request = $db->prepare("SELECT * FROM film");
        try{
            $request->execute(array());
            $all = $request->fetchAll();
            return $all;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public static function updateFilmById($title, $number_main_actors, $number_total_actors, $id){
        $db = Database::dbConnect();
        $request = $db->prepare("UPDATE `film` SET `title`=?, `number_main_actors`=?, `number_total_actors`=? WHERE id_film = ?");
        try{
            $request->execute(array($title, $number_main_actors, $number_total_actors, $id));
            header("Location: http://localhost/TP7_movies/views/list_film");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    
    public static function deleteFilmById($id){
        $db = Database::dbConnect();
        $request = $db->prepare("DELETE FROM film WHERE id_film = ?");
        try{
            $request->execute(array($id));
            header("Location: http://localhost/TP7_movies/views/list_film");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    public static function findFilmById($id){
       $db = Database::dbConnect();
        $request = $db->prepare("SELECT * FROM film WHERE id_film = ?");
        try{
            $request->execute(array($id));
            $all = $request->fetch();
            return $all;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}