<?php

require_once './conectionBD.php';

class User{
    //atributos de instancia
    private $userId;
    private $userPhoto;
    private $userName;
    private $userPass;
    private $userEmail;
    private $userType;
    private $dateHigh;
    private $city;
    
    //constructor
    function __construct($id, $photo, $name, $pass, $email, $type, $date, $city){
        $this->userId = $id;
        $this->userPhoto = $photo;
        $this->userName = $name;
        $this->userPass = $pass;
        $this->userEmail = $email;
        $this->userType = $type;
        $this->dateHigh = $date;
        $this->city = $city;
    }
    
    //getters
    function getUserId() {
        return $this->userId;
    }

    function getUserPhoto() {
        return $this->userPhoto;
    }

    function getUserName() {
        return $this->userName;
    }

    function getUserPass() {
        return $this->userPass;
    }

    function getUserEmail() {
        return $this->userEmail;
    }

    function getUserType() {
        return $this->userType;
    }

    function getDateHigh() {
        return $this->dateHigh;
    }

    function getCity() {
        return $this->city;
    }

    //setters
    function setUserId($userId) {
        $this->userId = $userId;
    }

    function setUserPhoto($userPhoto) {
        $this->userPhoto = $userPhoto;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setUserPass($userPass) {
        $this->userPass = $userPass;
    }

    function setUserEmail($userEmail) {
        $this->userEmail = $userEmail;
    }

    function setUserType($userType) {
        $this->userType = $userType;
    }

    function setDateHigh($dateHigh) {
        $this->dateHigh = $dateHigh;
    }

    function setCity($city) {
        $this->city = $city;
    }

    //photo, name, pass, email, date, city
    //métodos de instancia
    //new user
    public static function insertNewUser($photo, $name, $pass, $email, $date, $city){
        $conection = crowdedDB::connectDB();
        
        $insert = "INSERT INTO USER (userPhoto, userName, userPass, userEmail, dateHigh, city)"
              . " VALUES (\"".$photo."\", \"".$name."\", \"".$pass."\","
              . "\"".$email."\", \"".$date."\", \"".$city."\")";
        
        $conection->exec($insert);
    }
    
    //insert
    public function insert() {
        $conection = crowdedDB::connectDB();

        $insert = "INSERT INTO USER (userPhoto, userName, userPass, userEmail, dateHigh, city)"
                . " VALUES (\"".$this->userPhoto."\", \"".$this->userName."\", \"".$this->userPass."\""
                . "\"".$this->userEmail."\", \"".$this->dateHigh."\", \"".$this->city."\")";    

        $conection->exec($insert);
    }
    
    //update
    public static function update($photo, $name, $pass, $email, $date, $city) {
        $conection = crowdedDB::connectDB();
        
        $update = "UPDATE USER SET userPhoto=\"".$photo."\", userName=\"".$name."\", userPass=\"".$pass."\", userEmail=\"".$email."\", dateHigh=\"".
                $date."\", city=\"".$city."\","." WHERE userId=".$id;
        
        $conection->exec($update);
    }
    
    //delete
    public static function delete($atributo, $valor) {
      $conection = crowdedDB::connectDB();
      
      $delete = "DELETE FROM USER WHERE ".$atributo. "=\"".$valor."\"";
      $conection->exec($delete);
    }
    
    //compruve the user
    public static function compruveUser($userName){
        $exist = false;
        
        $conection = crowdedDB::connectDB();
        
        $query = "SELECT count(*) FROM USER WHERE userName=\"".$userName."\"";
        $result = $conection->prepare($query);
        $result->execute();
        
        if($result->fetchColumn() == 1){
            $exist = true;
        }
        
        return $exist;
    }
    
    //comprueve the pass
    public static function compruvePass($userName){
        $conection = crowdedDB::connectDB();
        
        $selection = "SELECT userPass FROM USER WHERE userName=\"".$userName."\"";
        $query = $conection->query($selection);
        $pass = "";
        
        while($registry = $query->fetchObject()){
            $pass = $registry->userPass;
        }
        
        return $pass;
    }
    
    //compruve admin
    public static function compruveAdmin($userName){
        $conection = crowdedDB::connectDB();
        
        $selection = "SELECT admin FROM USER WHERE userName=\"".$userName."\"";
        $query = $conection->query($selection);
        $result = false;
        
        while($registry = $query->fetchObject()){
            if($registry->admin == 1){
                $result = true;
            }
        }
        
        return $result;
    }
}