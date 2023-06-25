<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  //Properties
  public $name;
  public $email;
  public $password;

  //Constructor
  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }
}

//Instantiate an object
$user1 = new User('Brad', 'aaot@gmail.com', '1223');

$user1->name = 'Adam';


// echo $user1->get_name();
// echo $user2->get_name();



// $user2->get_name();

// var_dump($user1);

//Inheritance

class Employee extends User {
  public function __construct($name, $email, $password) {
    parent::__construct($name, $email, $password);
  }
}

$employee1 = new Employee("haha", "kkkkkkk", '12345');

echo $employee1->get_name();