<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="La Poutine Visual design by Montreal artist Loogart">
    <meta name="author" content="Chris Soueidan of Loogart">
    <meta property="og:title" content="La Poutine Week visual design by Loogart">
    <meta property="og:description" content="Lea Poutine Week illustration, print advertising artwork, graphic design by Loogart">
    <meta property="og:url" content="http://loogart.com/">
    <meta property="og:image" content="http://loogart.com/img/portfolio/poutineweek/.jpg">
    <?php include './php/favicons.php';?>

    <title>La Poutine Week Visual Design | Loogart</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/font-awesome.css" rel="stylesheet">
    <link href="./css/zoom.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php include './php/facebook-pixel.php';?>

</head>
<script>
    fbq('track', 'ViewPoutineWeek');

</script>

<body>
    <?php include './php/analyticstracking.php';?>
    <!-- Fixed navbar -->
    <?php include './php/navbar.php';?>

    <!-- champion image -->
    <div class="project-jumbotron" style="height:24vh;background-color:#07173C"></div>

    <div class="container-fluid">

        <?php include './php/back.php';?>

        <!-- Content section -->
        <section class="portfolio-content">

            <!-- First section: Starbucks Montreal -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

                    <img class="img-responsive" src="./img/logo-la-poutine-week.png" style="max-width:120px;margin:30px 0">
                    <h1>La Poutine Visual Design by Loogart</h1>
                    <p>Every year since 2012, between February 1-7, restaurants around Quebec, Ontario and even internationally create their brainchild poutine which will leave you salivating for days after the one-week long festival is over.</p>
                    
                    <h3>Poutine illustration</h3>
                    <p>As the long-term design partner of People Mover Tech, Loogart created visuals that enhanced the existing brand. The visuals are used for print and web material such as posters, table tents, stickers, web graphics and award-winning restaurants.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <img class="img-responsive img-spacing" src="./img/portfolio/bref/" data-action="zoom">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-responsive img-spacing" src="./img/portfolio/bref/" data-action="zoom">
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <?php include './php/back.php';?>

    </div>
    <!-- footer -->
    <?php include './php/footer.php';?>
</body>

</html>
