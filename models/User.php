<?php
include_once '../config.php';
class User {
    private $lastName;
    private $firstName;
    private $birthDate;
    private $address;
    private $zipCode;
    private $phoneNumber;
    private $idService;
    private $db;
    public function __construct() {
        try {
            $this->db = new PDO(DSN, USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    public function getLastName() {
        return $this->lastName;
    }
    public function getFirstName() {
        return $this->firstName;
    }
    public function getBirthDate() {
        return $this->birthDate;
    }
    public function getAddress() {
        return $this->address;
    }
    public function getZipCode() {
        return $this->zipCode;
    }
    public function getPhoneNumber() {
        return $this->phoneNumber;
    }
    public function getIdService() {
        return $this->idService;
    }
    public function getAllUsers() {
        $sql  = 'SELECT `lastName`, `firstName`, DATE_FORMAT(`birthDate`, "%d/%m/%Y") birthdate, `adress`, `zipCode`, `phoneNumber`, `service`.`name` AS service FROM `users` INNER JOIN `service` USING (idService);';        
        $usersRequest = $this->db->query($sql);
        $userList = $usersRequest->fetchAll(PDO::FETCH_OBJ);
        return $userList;
    }
    
}
