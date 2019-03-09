<?php 
class Person {
   public $fName = "";
   public $lName = "";
   public $email = "";
   public $gender = "";
   public $street = "";
   public $city = "";
   public $country = ""; 

   public function __construct(String $_fName, String $_lName, String $_email, String $_gender, String $_street, String $_city, String $_country) {
      $this->fName = $_fName;
      $this->lName = $_lName;
      $this->email = $_email;
      $this->gender = $_gender;
      $this->street = $_street;
      $this->city = $_city;
      $this->country = $_country;
   }

   
   

}
?>