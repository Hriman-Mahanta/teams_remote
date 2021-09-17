
<!DOCTYPE html>

<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <center>
                    <div class="panel panel-default" style="width: 50%;">
                        <div class="panel-heading">
                            <center>
                            <h2><b>Sign Up</b></h2>
                            </center>
                        </div>
                        <div class="panel-body">
                        <form method="post" action="signup_script.php">
                            <div class="form-group" style="text-align: left;">
                                <b>Name:</b>
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required="true">
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <b>Email:</b>
                                <input type="text" class="form-control" name="email" placeholder="Enter Email" required="true">
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <b>Mobile:</b>
                                <input type="tel" class="form-control" name="mobile" placeholder="Enter Mobile Number" required="true">
                            </div>
                            <div class="form-group" style="text-align: left;">
                                <b>Password:</b>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password" required="true">
                            </div>
                        <button class="btn btn-block btn-info">Sign Up</button>
                        </form>
                        </div>
                    </div>
            </center>
        </div>
    </body>
</html>
