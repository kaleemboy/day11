<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
       
        </style>
    </head>
    <body>
       
        <div class="container">
            <form action="new_action.php" method="POST">
                <div class="form-group">
                    <label for="name">NAME</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter your name" name="name"/>
                </div> 
                <div class="form-group">
                    <label for="class">CLASS</label>
                    <input type="class" class="form-control" id="class" name="class"/>
                </div>
                <div class="form-group">
                    <label for="name">MARKS</label>
                    <input for="name" class="form-control" id="marks" name="marks"/>
                </div>
                 <div class="form-group">
                    <label for="text">ROLL NO.</label>
                    <input type="text" class="form-control" id="rollno" name="rollno"/>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="rememberme">Remember Me</label> 
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
            
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
    </body>
</html>
