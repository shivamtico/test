<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row res_form">
                <form action="action/res_log.php" method="POST" name="res_form" id="res_form" role="form" data-toggle="validator"> 
                        <div class="form-group">
                            <lable>First Name</lable>
                            <input type="text" name="firstname" id="fname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <lable>Last Name</lable>
                            <input type="text" name="lastname" id="lname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <lable>Email ID</lable>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <lable>Password</lable>
                            <input type="password" name="password" id="password" class="form-control" required >
                        </div>
                        <div class="form-group">
                            <lable>DOB</lable>
                            <input type="date" name="dob" id="dob" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <lable>Image</lable>
                            <input type="file" name="image" id="image" class="form-control" accept="images/*" required>
                        </div>
                        <div class="form-group">
                            <lable>Role</lable>
                            <select name="role" id="role" class="form-control" required>
                                <option name="admin">Admin</option>
                                <option name="user">User</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="register" id="register" class="btn btn-primary">
                        </div>
                </form>
            </div>
        </div>
    </body>
</html>
<!-- <script>
    $("")
</script> -->