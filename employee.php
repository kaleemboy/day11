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
    </head>
    <body>
        <div class="container">
            <h2>Employee Bio</h2>
            <form action="employee_action.php" method="post">
            <div class="form-group">
                <label for="name">NAME</label>
                <input type="name" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="salary">SALARY</label>
                <input type="salary" class="form-control" name="salary"/>
            </div>
            <div class="form-group">
                <label for="city">CITY</label>
                <input type="city" class="form-control" name="city"/>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
    </body>
</html>
