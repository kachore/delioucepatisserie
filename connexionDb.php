<?php 


function mydb(){
    $conn= new PDO('mysql:host=localhost:5050;dbname=parking_db','root','');
    return$conn;

  
}

?>