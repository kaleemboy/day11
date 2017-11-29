
<?php

        $hostname="localhost";
        $username="root";
        $password="";
        $databasename="newform";
        
        //conect to server
        $conn=new mysqli($hostname,$username,$password,$databasename);

$name=$_POST['name'];
$class=$_POST['class'];
$marks=$_POST['marks'];
$rollno=$_POST['rollno'];


    $q="insert into veryfication(name,class,marks,rollno) values('$name','$class','$marks','$rollno')";
    
    if($conn->query($q))
        echo "success";
    else {
        echo"faile"."<br>";
        
        echo $q ;
}
?>

