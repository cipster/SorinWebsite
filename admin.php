<?php
include_once "php/db/db_connect.php";
session_start();
if (!isset($_SESSION['myusername'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="ro">

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
    <link href="css/procertis.css" rel="stylesheet">

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
            <a class="navbar-brand page-scroll" href="#page-top"><b>ADMIN</b> PROCERTIS S.R.L</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php">&#206;napoi la site</a>
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
            <ul class="nav nav-pills nav-stacked" style="font-size: 14pt;">
                <li role="presentation" class="active"><a href="#imagini" aria-controls="imagini" role="tab" data-toggle="tab">Galerie</a></li>
                <li role="presentation"><a href="#lucrari" aria-controls="lucrari" role="tab" data-toggle="tab">Lucr&#259;ri</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 tab-content main">
            <div role="tabpanel" class="tab-pane active fade in" id="imagini">
                <div class="jumbotron">
                    <h2>Galerie</h2><br/>

                    <div class="form-group">
                        <table id="galery-links" width="90%" class="table table-responsive"></table>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#adauga-poze"><i class="fa fa-upload">&nbsp;</i>Adaug&#259; imagini</button>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="lucrari">
                <div class="jumbotron">
                    <h2>Adaug&#259; lucr&#259;ri</h2><br/>
                    <hr>
                    <textarea id="editor"></textarea>
                    <hr>
                    <button class="btn btn-success btn-lg" onclick="saveLucrare()"><i class="fa fa-plus-square-o">&nbsp;</i>Adaug&#259; lucrare</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="adauga-poze">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Adaug&#259; imagini &#238;n galerie</h4>
                </div>
                <div class="modal-body">
                    <hr>
                    <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                        <div id="image_preview"><img id="previewing" src="img/noimageplaceholder.png"/></div>
                        <hr id="line">
                        <div id="selectImage">
                            <label>Alege fisierul</label><br/>
                            <input type="file" name="file" id="file" required/>
                            <br>
                            <button type="submit" class="btn btn-lg btn-default"><i class="fa fa-upload">&nbsp;</i> Urc&#259;</button>
                        </div>
                    </form>
                    <h4 id='loading' style="display: none">se &#238;ncarc&#259;...</h4>

                    <div id="message"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">&#206;nchide</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    $filename = $_GET['filename'];
    $file = $_SERVER['DOCUMENT_ROOT'] . "/upload/$filename";
    if (is_readable($file)) {
        if (isset($_GET['filename'])) {
            if (!unlink($file)) {
                echo '<div class="col-sm-5 col-sm-offset-3 col-md-4 col-md-offset-2 alert alert-danger">' . "Eroare la stergerea fisierului $filename" . "</div>";
            } else {
                echo '<div class="col-sm-5 col-sm-offset-3 col-md-4 col-md-offset-2 alert alert-success">' . "Fisierul $filename a fost sters" . "</div>";
            }
        }
    }
    ?>
    <div id="alert" class="notifications"></div>
</body>
</html>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/admin.js"></script>
<script src="js/procertis.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="ckeditor/adapters/jquery.js"></script>
<script src="js/bootstrap-notify.js"></script>
<script type="text/javascript">
    function getImageList() {
        $.ajax({
            url: "php/galery.php",
            dataType: "json",
            success: function (data) {
                $('#galery-links').html('');
                $.each(data, function (i, filename) {
                    $('#galery-links').append('<tr><td>' + (i + 1) + '</td><td>' + filename + '</td><td><a href="?filename=' + filename + '" class="btn btn-danger btn-sm pull-right delete" >Sterge</a></td></tr>');
                });
            }
        });
    }
    function saveLucrare() {
        var continut = CKEDITOR.instances.editor.getData();
        if (continut.length <= 20) {
            showNotification("Continut prea putin!", "danger");
            return;
        }
        var lucrare = '<div class="content-section-a">' +
            '<div class="container">' +
            '<div class="row">' +
            '<div class="col-lg-5 col-sm-6">' +
            '<hr class="section-heading-spacer">' +
            '<div class="clearfix"></div>' +
            continut +
            '</div></div></div></div>';

        $.ajax({
            type: 'post',
            url: 'php/lucrare.php',
            dataType: "json",
            data: "lucrare=" + lucrare,
            success: function (response) {
                response = JSON.parse(response);
                if (response && response.httpStatus == 500) {
                    showNotification(response.message, "danger");
                } else {
                    CKEDITOR.instances.editor.setData('');
                    showNotification(response.message);
                }
            },
            error: function (err) {
                alert('Eroare la conexiune!' + err);
            }
        });
    }

    $(document).ready(function () {
        $('#editor').ckeditor();
        getImageList();

        $('#adauga-poze').on('hidden.bs.modal', function () {
            getImageList();
        });
    })
</script>