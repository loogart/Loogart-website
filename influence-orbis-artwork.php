<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Influence Toronto Artwork by Loogart">
    <meta name="author" content="Chris Soueidan of Loogart">
    <meta property="og:title" content="Custom artwork and Loogmojis by Loogart">
    <meta property="og:description" content="Custom Toronto cityscape and guest speakers Loogmojis by Loogart">
    <meta property="og:url" content="http://loogart.com/">
    <meta property="og:image" content="http://loogart.com/img/portfolio/influence-toronto/.jpg">
    <?php include './php/favicons.php';?>

    <title>Influence Toronto Artwork | Loogart</title>

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
    fbq('track', 'ViewInfluenceToronto');

</script>

<body>
    <?php include './php/analyticstracking.php';?>
    <!-- Fixed navbar -->
    <?php include './php/navbar.php';?>

    <!-- champion image -->
    <div class="project-jumbotron" style="height:24vh;background-color:#ddd"></div>

    <div class="container-fluid">

        <?php include './php/back.php';?>

        <!-- Content section -->
        <section class="portfolio-content">

            <!-- First section: Starbucks Montreal -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

                    <img class="img-responsive" src="./img/logo-influence-orbis.png" style="max-width:120px;margin:30px 0">
                    <h1>Influence Toronto Artwork by Loogart</h1>
                    <p>Influence Orbis is the #1 Canadian Influencer and entrepreneurship conference which brings together executives, entrepreneurs, students, creatives and individuals of influence from across the Globe. Each of their successful events is based on their 3 pillars: Inspire, Inform and Influence. The 2017 Editions were held in Montreal in May and in Toronto at the end of November.</p>
                    
                    <h3>Loogart x Influence Toronto</h3>
                    <p>Loogart was invited to create a Toronto illustration and the Loogmojis of the 4 guest influencers: Charlamagne Tha God, Casey Neistat, Grant Cardone and Angel Rich.</p>

                    <p>The artwork impressed the participants and the guest speakers who were given a canvas with their Loogmoji. The Loogmojis were shared on social media by the influencers on their Twitter feed, Instagram accounts and Facebook pages.</p>

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
