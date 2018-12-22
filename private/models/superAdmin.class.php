<?php

class SuperAdmin extends Admin{
  static protected $database;

  static public function set_database($database) {
    self::$database = $database;
  }

  private $is_super;

  public function getIsSuper(){
    return $this->is_super;
  }

  public function setIsSuper($is_super){
    $this->is_super = $is_super;
  }
}
