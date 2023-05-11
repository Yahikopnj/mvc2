<?php
use App\Controller\UserController;

require_once("../autoloader.php");

if(isset($_GET["route"])){

    if($_GET["route"] == "all"){
        UserController::all();
    }else if($_GET["route"]=="read"){
        UserController::readById($_GET["id_user"]);
    }else if($_GET["route"] == "create"){ 
        UserController::create($_POST);
    }else if($_GET["route"] == "update"){
        UserController::modif($_POST);
    }else if($_GET["route"] == "formUpdate"){
        UserController::formUpdate($_GET["id_user"]);
    }elseif($_GET["route"] == "delete"){
        UserController::delete($_GET["id_user"]);
    }
}


?>