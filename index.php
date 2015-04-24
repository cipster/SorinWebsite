<?php
include_once "php/db/db_connect.php";

session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="proiectare expertizare constructii civile industriale dirigentie de santier pentru constructii civile si industriale urmarire curenta in exploatare pentru constructii civile si industriale construction structure analysis">
    <meta name="author" content="Raindrop Solutions">

    <title>Procertis SRL</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/procertis.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.css">

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

<body id="page-top" class="index">
<!-- Navigation -->
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
            <a class="navbar-brand page-scroll" href="#page-top">PROCERTIS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Servicii</a>
                </li>
                <li>
                    <a class="page-scroll" href="#galery">Galerie</a>
                </li>
                <li>
                    <a class="page-scroll" href="#lucrari">Lucr&#259;ri</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header -->
<header>
    <!--    <div class="container">-->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class=""></li>
            <li data-target="#carousel" data-slide-to="1" class=""></li>
            <li data-target="#carousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item">
                <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>PROCERTIS</h1>
                        <h3>Proiectare Construc&#539;ii Civile &#x219;i Industriale</h3>
                        <h3>Dirigen&#539;ie de &#x218;antier pentru Construc&#539;ii Civile &#x219;i Industriale</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="http://ro.linkedin.com/pub/bucur-portase-sorin-daniel/b3/a98/220/en" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span
                                        class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>PROCERTIS</h1>
                        <h3>Proiectare Construc&#539;ii Civile &#x219;i Industriale</h3>
                        <h3>Dirigen&#539;ie de &#x218;antier pentru Construc&#539;ii Civile &#x219;i Industriale</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="http://ro.linkedin.com/pub/bucur-portase-sorin-daniel/b3/a98/220/en" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span
                                        class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item active">
                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>PROCERTIS</h1>
                        <h3>Proiectare Construc&#539;ii Civile &#x219;i Industriale</h3>
                        <h3>Dirigen&#539;ie de &#x218;antier pentru Construc&#539;ii Civile &#x219;i Industriale</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#galery" class="btn btn-default btn-lg page-scroll"><i class="fa fa-picture-o fa-fw"></i> <span
                                        class="network-name">Galerie</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!-- Page Content -->
<a id="services" name="services"></a>

<div class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Proiectare &#x219;i Expertizare Construc&#539;ii Civile &#x219;i Industriale</h2>

                <p class="lead">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/ipad.png" alt="" style="margin-top: 15%;">
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.content-section-a -->

<div class="content-section-b">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Dirigen&#539;ie de &#x218;antier pentru Construc&#539;ii Civile &#x219;i Industriale</h2>

                <p class="lead">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                <img class="img-responsive" src="img/dog.png" alt="" style="margin-top: 15%;">
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.content-section-b -->

<div class="content-section-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Urm&#259;rire curent&#259; &#238;n Exploatare pentru Construc&#539;ii Civile &#x219;i Industriale</h2>

                <p class="lead">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/urmarire.jpg" alt="" style="margin-top: 10%;">
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.content-section-a -->

<a id="galery" name="galery"></a>

<div class="content-section-b">
    <div class="container">
        <hr class="section-heading-spacer">
        <div class="clearfix"></div>
        <h2 class="section-heading">Galerie foto</h2>
        <div id="links"></div>

    </div>
</div>

<a id="lucrari" name="lucrari"></a>

<div class="content-section-b">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-7 col-md-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">S.C PROCERTIS S.R.L este certificat&#259; <code>ISO9001</code></h2>

                <p class="lead">Proiectare &#x219;i Expertizare Construc&#539;ii Civile &#x219;i Industriale
                    <br>Dirigen&#539;ie de &#x218;antier pentru Construc&#539;ii Civile &#x219;i Industriale
                    <br>Urm&#259;rire curent&#259; &#238;n Exploatare pentru Construc&#539;ii Civile &#x219;i Industriale.</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 col-sm-5" style="margin-top: 3%;">
                <img class="img-responsive" src="img/iso9001.png" alt="ISO9001">
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.content-section-b -->
<a id="contact" name="contact"></a>

<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>S.C PROCERTIS S.R.L</h2>

                <h3><p>Sector 6, Bucure&#x219;ti
                        <br>
                        CUI RO18085778
                        <br>
                        J40/18230/31.10.2005</p></h3>
            </div>
            <div class="col-lg-3">
                <ul class="list-inline banner-social-buttons">
                    <li class="contact">
                        <a class="btn btn-default btn-lg"><i class="fa fa-phone fa-fw"></i> <span class="network-name">+40 727 553225</span></a>
                    </li>
                    <li class="contact">
                        <a href="http://ro.linkedin.com/pub/bucur-portase-sorin-daniel/b3/a98/220/en" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span
                                class="network-name">Linkedin</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.banner -->


<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Pune o &#238;ntrebare</h2>

                <h3 class="section-subheading text-muted">Afl&#259; mai multe de la noi trimi&#539;&#226;nd un mesaj</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Numele t&#259;u *" id="name" required data-validation-required-message="Te rog introdu numele.">

                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Adres&#259; email *" id="email" required data-validation-required-message="Te rog introdu adresa de email.">

                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Num&#259;r de telefon *" id="phone" required
                                       data-validation-required-message="Te rog introdu &#x219;i num&#259;rul de telefon.">

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Mesajul t&#259;u *" id="message" required data-validation-required-message="Te rog scrie &#x219;i un mesaj."></textarea>

                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Trimite mesaj</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li>
                        <a class="page-scroll" href="#top">PROCERTIS</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a class="page-scroll" href="#services">Servicii</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a class="page-scroll" href="#contact">Galerie</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a class="page-scroll" href="#galery">Contact</a>
                    </li>
                </ul>
                <p class="copyright text-muted small">Copyright &copy; PROCERTIS S.R.L 2005 - <span id="an"></span>. Toate drepturile rezervate
                    <span class="pull-right">Concep&#539;ie de  <span class="green">Raindrop Solutions&nbsp;</span><img
                            src="img/raindrop-logo.png" class="raindrop"></span></p>
            </div>
        </div>
    </div>
</footer>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev"><i class="fa fa-chevron-left"></i></a>
    <a class="next"><i class="fa fa-chevron-right"></i></a>
    <a class="close"><i class="fa fa-times"></i></a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>

    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="fa fa-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="alert" class="notifications"></div>
</body>
</html>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.min.js"></script>
<script src="js/demo.js"></script>
<script src="js/bootstrap-notify.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/procertis.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#an').text(new Date().getFullYear());
        $.ajax({
            url: "php/galery.php",
            dataType: "json",
            success: function (data) {

                $.each(data, function (i, filename) {
                    $('#links').prepend('<a href="upload/' + filename + '" title="' + filename + '" data-gallery> <img src="upload/' + filename + '" class="galery-image" alt=""> </a>');
                });
            }
        });
    });
</script>