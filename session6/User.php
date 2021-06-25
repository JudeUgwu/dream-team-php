<?php 

class User extends Database{

  private $id;
  private $username;
  private $email;
  private $password;
  private  $role;
  private $created_at;
  private $updated_at;
  

  public function checkConnnection(){
    echo $this->getDatabaseInstance();
  }

  public function __construct($username,$email,$password){
     $this->username = $username;
     $this->email = $email;
     $this->password = $password;
  }

  public function register(){
    echo $this->username." successfully registered";
  }

  public function login(){
    echo $this->username." successfully logged in";
  }

  public function setRole($newRole){
    $this->role = $newRole;
  }

  public function setUsername($username){
    $this->username = $username;
  }

  public function getUsername(){
    return $this->username;
  }

}