<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Loogart: We can't seem to find the page you're looking for.">
    <meta name="author" content="Chris Soueidan of Loogart">
    <meta property="og:title" content="Loogart">
    <meta property="og:description" content="Loogart 404 Page">
    <meta property="og:url" content="http://loogart.com/">
    <meta property="og:image" content="http://loogart.com/img/bowser-404.gif">
    <?php include 'php/favicons.php';?>

        <title>404 Page Not Found - Loogart</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/zoom.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <?php include 'php/analyticstracking.php';?>

        <!-- Fixed navbar -->
        <?php include 'php/navbar.php';?>
            <section class="page-404">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-2">
                            <h3>P-oops!</h3>
                            <p>We can't seem to find the page you are looking for...</p>
                            <p class="cta-back">
                                <a href="http://loogart.com" role="button">Home</a>
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <div class="img-404"></div>
                        </div>
                    </div>
                </div>
            </section>
</body>

</html>