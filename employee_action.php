<?php

$hostname="localhost";
$username="root";
$password="";
$databasename="company";

$conn=new mysqli($hostname,$username,$password,$databasename);

$name=$_POST['name'];
$salary=$_POST['salary'];
$city=$_POST['city'];

$q="insert into employee(name,salary,city) values('$name','$salary','$city')";

if($conn->query($q))
echo "success";
else {
    echo "fail"."<br>";
    
    echo $q;
}
