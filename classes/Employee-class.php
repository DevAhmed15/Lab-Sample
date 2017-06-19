<?php
require_once("connection.php");
class Employee
{
    
    private $salary;
    private $address;
    private $workHours;
    
    function setData($name,$add,$woH) //function for set data of employee
    {
        
    }
    
    function getSal()   // function for show the salaries of employee
    {
        
        
    }
    
    function getAdd()//function for show the address of employee
    {
       
        
    }
    
    function getwH() // function for show the working hour
    {
        
    }
}
    $emp=new Employee();
echo '<tt><pre>'.var_export($emp,TRUE).'</pre></tt>';
?>