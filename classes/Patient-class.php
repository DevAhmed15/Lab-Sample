<?php
require_once("connection.php");
class Patient
{
    
    private $bloodType;
    
    function setBtype($bloodType) //function for set type of blood
    {
        
    }
    
    function getBtype()   // function for show the type of blood
    {
        
        
    }
    
    function reserveApp($appointment)//function for reservation the appointment
    {
       
        
    }
    
    function register($name , $mobile, $email ,$password ,$age ,$gender) // function for regiter 
    {
        
    }
    function seeReservs($result)// function for show the reservations
    {
        
    }
    
    function seeTests($report)// function for show the results
    {
        
    }
    
    function sendrescudleMsg($a)// function for show the result
    {
        
    }
    
    function pay($test,$a)// function for show the result
    {
        
    }
    
    
}
    $emp=new Report();
echo '<tt><pre>'.var_export($emp,TRUE).'</pre></tt>';
    
?>