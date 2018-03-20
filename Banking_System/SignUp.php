<html>
    <head>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
                <style>
            body {
                margin:10px 50px 10px 50px;
                border-right: 2px grey solid;
                border-left: 2px grey solid;
            }
        </style>
        <title>Sign Up</title>
    </head>
    <body>
        <div class="container">
            <div class="col-xs-6">
                <form action="SignUpScript.php" method="post">
                    <div class="form-group">
                        <label for="fname">
                            First Name
                        </label>
                        <input type="text" name="fname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lname">
                            Last Name
                        </label>
                        <input type="text" name="lname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dob">
                            Date of Birth
                        </label>
                        <input type="date" name="dob" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">
                            Contact No.
                        </label>
                        <input type="number" name="contact" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            Email
                        </label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pan">
                            PAN No.
                        </label>
                        <input type="text" name="pan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nation">
                            Nationality
                        </label>
                        <input type="text" name="nation" class="form-control" required>
                    </div>
            </div>
            <div class="col-xs-6">
                
                <div class="form-group">
                        <label for="add">
                            Address
                        </label>
                    <textarea class="form-control" rows="4" cols="30" name="add" required>                        
                    </textarea>
                    </div>
                <div class="form-group">
                        <label for="pin">
                            Pin Code
                        </label>
                        <input type="number" name="pin" class="form-control" required>
                    </div>
                <div class="form-group panel panel-body panel-primary">
                        <label for="type">
                            Type of Account: <br>
                        </label>
                    <input type="radio" name="type" value="SA" checked>Savings Account &nbsp;
                    <input type="radio" name="type" value="CA">Current Account&nbsp;
                    <input type="radio" name="type"  value="PPF">PPF Account&nbsp; 
                    </div>
                <div class="form-group">
                        <label for="pass">
                            Password
                        </label>
                    <input type="password" name="pass" class="form-control" required>
                    </div>
                <div class="form-group">
                        <label for="repass">
                            Re-type password
                        </label>
                        <input type="password" name="repass" class="form-control" required>
                    </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button> &nbsp;&nbsp;&nbsp;
                    <button type="reset" name="clear" class="btn btn-primary">Clear</button>
                </div>
                
                </form>
                <p><b>NOTE:</b>Your username will be the same as your email address.</p>
            </div>
            
        </div>
    </body>
</html>
