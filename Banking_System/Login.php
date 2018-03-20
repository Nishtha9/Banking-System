<html>
    <head>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <style>
            body {
                margin:10px 50px 10px 50px;
                border-right: 2px grey solid;
                border-left: 2px grey solid;
            }
        </style>
        <title>Login to our services</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-xs-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Login:</h4>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="LoginScript.php">
                            <div class="form-group">
                            <label for="user">
                                Username:
                            </label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label for="pass">
                                Password:
                            </label>
                                <input type="password" name="pass" class="form-control" required>
                            </div>
                        <div class="form-group col-xs-4">
                            <button type="submit" name="submit" class="btn btn-primary form-control">Login</button>
                        </div>
                            <div class="form-group col-xs-4">
                            <button type="reset" name="clr" class="btn btn-primary form-control">Reset</button>
                        </div>
                    </div>
                        </form>
                    </div>
            </div>
            <div class="col-xs-2">                
                <br><br><br><br>
                <br>
                <a href="SignUp.php">New User? Register Here</a>
                <br>
                <br>
                <a href="#forgotpass" data-toggle="modal" data-target="#forgotpass">Forgot Password?</a> <!--Use Modal here later-->
                <br>
                <br>
                <a href="#forgotuser" data-toggle="modal" data-target="#forgotuser">Forgot Username?</a> <!--Use Modal here later-->
            </div>
            <div class="modal fade" id="forgotpass" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                        <div class="modal-body">
                    </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                </div>
                </div>
            </div>
            <div class="modal fade" id="forgotuser" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                         <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                        <div class="modal-body">
                    </div>
                        <div class="modal-footer">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <img src="img/login.jpg" alt="login" class="img-responsive img-rounded">
            </div>
            <div class="col-xs-12">
                <p id="info" style="font-size: 15px; position: relative;">NEVER respond to any popup,email, 
                    SMS or phone call, no matter how appealing or official looking, 
                    seeking your personal information such as username, password(s), mobile number, 
                    ATM Card details, etc. Such communications are sent or created by fraudsters to trick 
                    you into parting with your credentials.</p>
            </div>
                <script type="text/javascript">
                    var elt=document.getElementById('info');
                    var t=0;
                    var id=setInterval(change,15);
                    function change()
                    {
                        if ((t%100)==0)
                        {
                            elt.style.color="red";
                        }
                        else if ((t%150)==0)
                        {
                            elt.style.color="blue";
                        }
                        t+=5;
                        
                    }
                </script>
        </div>
    </body>
</html>