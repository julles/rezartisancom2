<!DOCTYPE html>
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>    
<meta http-equiv="content-language" content="en-us, id">
<meta http-equiv="cache-control" content="cache" />
<meta name="keywords" content="Muhamad Reza,Abdul Rohim,koding,laravel,indonesia,web developer,bogor,tutorial,bahasa,vue,javascript" />
<meta name="description" content="halo saya Muhamad Reza Abdul Rohim Expert Web Application Developer dari Bogor,Indonesia" />
<meta name="robots" content="">
<meta name="rating" content="general" />
<meta name="publisher" content="www.rezartisan.com" />
<meta name="copyright" content="www.rezartisan,2017" />
<meta name="author" content="Muhamad Reza Abdul Rohim" />
<meta name="distribution" content="global" />
<meta name="language" content="en, id" />
<meta name="geo.country" content="id" />
<meta name="geo.placename" content="indonesia" />
<meta name="expires" content="never"/>
<meta name="revisit-after" content="1 days"/>
<meta name="spiders" content="all"/>

    <title>Muhamad Reza-{{ $page }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ Frontend::asset(null) }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ Frontend::asset(null) }}/css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ Frontend::asset(null) }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">rezartisan.com</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    @yield('content')

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="https://twitter.com/muhamadrezaar">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://facebook.com/reza.abelard">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/julles">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Muhamad Reza Abdul Rohim 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ Frontend::asset(null) }}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ Frontend::asset(null) }}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ Frontend::asset(null) }}/js/jqBootstrapValidation.js"></script>
    <script src="{{ Frontend::asset(null) }}/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="{{ Frontend::asset(null) }}/js/clean-blog.min.js"></script>

</body>

</html>
