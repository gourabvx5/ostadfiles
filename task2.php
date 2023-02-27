<?php 

class Person {


// Properties
  private $name;
  private $email;


// Method to set the name
  public function setName($name) {
    $this->name = $name;
  }


// Method to set the email
  public function setEmail($email) {
    $this->email = $email;
  }


// Method to get the name
  public function getName() {
    return $this->name;
  }


// Method to get the email
  public function getEmail() {
    return $this->email;
  }


}


// Create an instance of the Person class
$person1 = new Person();


// Set the name and email properties
$person1->setName("John Doe");
$person1->setEmail("john.doe@example.com");


// Use the getName() and getEmail() methods to display the properties on the webpage
echo "Name: " . $person1->getName();
echo "
";
echo "Email: " . $person1->getEmail();