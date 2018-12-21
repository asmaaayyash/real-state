<?php

class Admin {
  static protected $database;

  static public function set_database($database) {
    self::$database = $database;
  }

  public $id;
  private $name;
  private $email;
  private $username;
  private $hashed_password;
  private $created_at;
  private $updated_at;
  private $is_super;




  public function verify_password($password) {
      //password_verify built in function
      return password_verify($password, $this->hashed_password);
    }

    public function getId(){
      return $this->id;
    }
    public function getName(){
      return $this->name;
    }
    public function getEmail(){
      return $this->email;
    }
    public function getUsername(){
      return $this->username;
    }
    public function getHashedPassword(){
      return $this->hashed_password;
    }
    public function getCreatedAt(){
      return $this->created_at;
    }
    public function getUpdatedAt(){
      return $this->updated_at;
    }
    public function setId($id){
      $this->id = $id;
    }
    public function setName($name){
      $this->name = $name;
    }
    public function setEmail($email){
      $this->email = $email;
    }
    public function setUsername($username){
      $this->username = $username;
    }
    public function setHashedPassword($hashed_password){
      $this->hashed_password = $hashed_password;
    }
    public function setCreatedAt($created_at){
      $this->created_at = $created_at;
    }
    public function setUpdatedAt($updated_at){
      $this->updated_at = $updated_at;
    }

    public function getIsSuper(){
      return $this->is_super;
    }

    public function setIsSuper($is_super){
      $this->is_super = $is_super;
    }


}
