
<html>
    <head>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js">
            </script>
            <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"> </script>

        <title>Welcome to our bank</title>
    </head>
    <body>
        <div class="container" style="border-left: 2px #2e6da4 solid;border-right: 2px #2e6da4 solid;">
            <div class="row">
                <div class="col-xs-offset-4" style="color:black; font-size:18px;">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="index.php" > Home </a></li>
                        <li class="breadcrumb-item"><a href="#"> Settings </a></li>
                        <li class="breadcrumb-item"><a href="Login.php"> Logout </a></li>
                    </ol>
                </nav>
                </div>
            </div>
            <div class="row">
            <div class="col-xs-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4> Quick Links: </h4>
                    </div>
                    <div class="panel-body">
                        <a href="#" role="button" class="btn btn-primary btn-block btn-lg">Account Statement</a>
                        <a href="#" role="button" class="btn btn-primary btn-block btn-lg">Transfer Money</a>
                        <a href="#" role="button" class="btn btn-primary btn-block btn-lg">Deposit Money</a>
                        <a href="#" role="button" class="btn btn-primary btn-block btn-lg">Transaction History</a>
                        <a href="#" role="button" class="btn btn-primary btn-block btn-lg">Change Password</a>
                        <a href="#" role="button" class="btn btn-primary btn-block btn-lg">Close Account</a>
                    </div>
                </div>
                <div id="animate">
                    <div id="blnk" style="color:blue; font-weight:bold; font-size:22px; position:absolute">
                        Welcome!
                    </div><br><br>
                    <div id="move" style="color:red; font-size:18px; font-weight: light;position:relative;">
                        We provide you the best services at home.
                    </div>
                </div>
                <script type="text/javascript">
                var elt1=document.getElementById("blnk");
                var elt2=document.getElementById("move");
                setInterval(blinkit,15);
                setInterval(moveit,15);
                var x=0; var pos=0;
                function blinkit()
                {  
                    if ((x%16)==0)
                    {
                        elt1.innerHTML=" ";
                    }
                    else
                    {
                        elt1.innerHTML="Welcome!";
                    }
                    x++;
                }
                function moveit(){
                    if (pos==350)
                    {
                        pos=0;
                    }
                    else
                    {
                        pos++;
                    }
                    elt2.style.left=pos + 'px';
                }
                </script>
            </div>
                <div class="col-xs-8" >
                    <div class="carousel slide" id="mySlide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li  data-target="#mySlide" data-slide-to="0" class="active"></li>
                            <li data-slide-to="1" data-target="#mySlide"></li>
                            <li data-slide-to="2" data-target="#mySlide"></li>
                            <li data-slide-to="3" data-target="#mySlide"></li>
                            <li data-slide-to="4" data-target="#mySlide"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/im1.jpg" class="img-responsive img-rounded" style="width: 750px; height:500px; border:2px black solid;">
                        </div>
                        <div class="carousel-item">
                            <img src="img/im2.jpg" class="img-responsive img-rounded"  style="width: 750px;height:500px; border:2px black solid;">
                        </div>
                        <div class="carousel-item">
                            <img src="img/im3.jpg" class="img-responsive img-rounded"  style="width: 750px;height:500px; border:2px black solid;">
                        </div>
                        <div class="carousel-item">
                            <img src="img/im4.jpg" class="img-responsive img-rounded"  style="width: 750px;height:500px; border:2px black solid;">
                        </div>
                        <div class="carousel-item">
                            <img src="img/im5.jpg" class="img-responsive img-rounded"  style="width: 750px;height:500px; border:2px black solid;">
                        </div>
                        </div>
                        <a href="#mySlide" class="carousel-control-prev" data-slide="prev" role="button">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#mySlide" class="carousel-control-next" data-slide="next" role="button">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
