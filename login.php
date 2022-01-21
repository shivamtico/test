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
                <form action="action/login_all.php" method="POST" name="res_form" id="res_form" role="form"> 
                        <div class="form-group">
                            <lable>Email ID</lable>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <lable>Password</lable>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="login" id="login" class="btn btn-primary" required>
                        </div>
                </form>
            </div>
        </div>
    </body>
</html>
