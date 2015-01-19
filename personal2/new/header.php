<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap Layout</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

</head>
<body>
<header class="container">
    <select class="row">
        <section class="col-md-12">
            <img src="image/url.jpeg" class="img-responsive" alt="Responsive image">
        </section>
    </select>
</header>
<nav class="container">
    <section class="row">
        <section class="col-md-12">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home<span class="sr-only"></span></a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Link <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Link 1</a></li>
                                    <li><a href="#">Link 2</a></li>
                                    <li><a href="#">Link 3</a></li>
                                    <li><a href="#">Link 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Link 5</a></li>
                                    <li><a href="#">Link 6</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">About<span class="sr-only"></span></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </section>
    </section>
</nav>
