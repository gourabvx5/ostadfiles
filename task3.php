<?php 

// Retrieve the user's name and email from the HTML form
$name = $POST["name"];
$email = $POST["email"];


// Create an instance of the Person class
$person1 = new Person();


// Set the name and email properties
$person1->setName($name);
$person1->setEmail($email);


// Use the getName() and getEmail() methods to display the properties on the webpage
echo "Name: " . $person1->getName();
echo "
";
echo "Email: " . $person1->getEmail();