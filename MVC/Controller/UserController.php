<?php
namespace App\Controller;
use App\model\User;
require("../autoloader.php");
class UserController{


public static function all(){
    $users = User::findAll();
    require("../View/ReadAllUsers.php");
}

public static function readById($id_user){
    $user = User::findById($id_user);
    require("../View/Read.php");
}

public  static function create($post){

    
   $user=  new User($post["lastname"], $post["firstname"], $post["email"], $post["password"], $post["birthday"],false);
   $user->insert();


   self::all();
}

public static function modif($post){
    $user=  new User($post["lastname"], $post["firstname"], $post["email"], $post["password"], $post["birthday"],false);
    $user->update($post["id_user"]);
    self::all();
}

public static function formUpdate($id_user){
    $user = User::findById($id_user);
    require("../View/formUpdateUser.php");
}

public static function delete($id_user){
    $user = User::deleteById($id_user);
    self::all();
}


}

?>





