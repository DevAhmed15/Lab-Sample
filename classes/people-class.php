<?php
require_once("connection.php");
class people
{
 private $id;
 private $name;
 private $mobile;
 private $email;
 private $password;
 private $gender;
 private $age;
  
  function set_data($id,$name,$mobile,$email,$password,$gender,$age)
  {
      $this->id=$id;
      $this->name=$name;
      $this->mobile=$mobile;
      $this->email=$email;
      $this->password=$password; 
      $this->gender=$gender;
      $this->age=$age;
      
  }
    
  function get_id()
      
  {
     return $this->id;   
  }
  
  function get_name()
  {
      return $this->name;
  }
    
  function get_mobile()
  {
      return $this->mobile;
  }
   
  function get_email()
  {
      $this->email;
  }
  
  function get_password()
  {
      $this->password;
  }
  function get_gender()
  {
      $this->gender;
  }

  function get_age()
  {
      $this_>age;
  }
  
  function login()
  {
      
  }  
}

$p=new people();
echo '<tt><pre>'.var_export($p,TRUE).'</pre></tt>';
?>

























