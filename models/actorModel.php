<?php
require_once "database.php";
class Actor{
    public static function addActor($name, $email){
        $db = Database::dbConnect();
        $request = $db->prepare("INSERT INTO actor (name, email) VALUE (?, ?)");
        try{
            $request->execute(array($name, $email));
            header("Location: http://localhost/TP7_movies/index.php");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public static function findAllactor(){
        $db = Database::dbConnect();
        $request = $db->prepare("SELECT * FROM actor");
        try{
            $request->execute(array());
            $all = $request->fetchAll();
            return $all;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public static function updateActorById($name, $email, $id){
        $db = Database::dbConnect();
        $request = $db->prepare("UPDATE `actor` SET `name`=?, `email`=? WHERE id_actor = ?");
        try{
            $request->execute(array($name, $email, $id));
            header("Location: http://localhost/TP7_movies/views/list_actor");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public static function deleteActorById($id){
        $db = Database::dbConnect();
        $request = $db->prepare("DELETE FROM actor WHERE id_actor = ?");
        try{
            $request->execute(array($id));
            header("Location: http://localhost/TP7_movies/views/list_actor");
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public static function findActorById($id){
       $db = Database::dbConnect();
        $request = $db->prepare("SELECT * FROM actor WHERE id_actor = ?");
        try{
            $request->execute(array($id));
            $all = $request->fetch();
            return $all;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}