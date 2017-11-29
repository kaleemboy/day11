<?php

        $hostname="localhost";
        $password="";
        $username="root";
        $databasename="newspaper";
        
        //conect to server
        $conn=new mysqli($hostname,$username,$password,$databasename);

$tittle=$_POST['tittle'];
$papername=$_POST['papername'];



  //echo "Id:" .$_POST['id']."<br/>";
    //echo "Tittle:" .$_POST['tittle']."<br/>";
    //echo "papername:" .$_POST['papername']."<br/>";
    
    //insert query 
    $q="insert into newspaper(tittle,papername) values('$tittle','$papername')";
    
    if($conn->query($q))
        echo "success";
    else {
        echo"faile";
}
        
        
   //echo 'sql'.$q; 

?>

