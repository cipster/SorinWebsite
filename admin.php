<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="proiectare expertizare constructii civile industriale dirigentie de santier pentru constructii civile si industriale urmarire curenta in exploatare pentru constructii civile si industriale construction structure analysis">
    <meta name="author" content="Raindrop Solutions">

    <title>Procertis SRL Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">PROCERTIS S.R.L</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="index.html">&#206;napoi la site</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation"><a href="#imagini" aria-controls="imagini" role="tab" data-toggle="tab">Imagini <span class="sr-only">(current)</span></a></li>
                <li role="presentation"><a href="#parola" aria-controls="parola" role="tab" data-toggle="tab">Parola</a></li>
                <li role="presentation"><a href="#" aria-controls="home" role="tab" data-toggle="tab">Analytics</a></li>
                <li role="presentation"><a href="#" aria-controls="home" role="tab" data-toggle="tab">Export</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 tab-content main">
            <div role="tabpanel" class="tab-pane active fade in" id="imagini">
                <div class="jumbotron">
                    <h1>Upload imagini</h1><br/>
                    <hr>
                    <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                        <div id="image_preview"><img id="previewing" src="img/noimage.png"/></div>
                        <hr id="line">
                        <div id="selectImage">
                            <label>Select Your Image</label><br/>
                            <input type="file" name="file" id="file" required/>
                            <input type="submit" value="Upload" class="submit"/>
                        </div>
                    </form>
                    <h4 id='loading' style="display: none">loading..</h4>

                    <div id="message"></div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="parola">
                ...
            </div>
            <div role="tabpanel" class="tab-pane fade" id="">...</div>
            <div role="tabpanel" class="tab-pane fade" id="">....</div>
        </div>
    </div>
</div>
</body>
</html>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/admin.js"></script>