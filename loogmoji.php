<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="A collection of pop culture emojis illustrated by Loogart">
    <meta name="author" content="Chris Soueidan of Loogart">
    <meta property="og:title" content="Loogmoji">
    <meta property="og:description" content="Caricatures of pop culture icons illustrated by Chris Soueidan of Loogart">
    <meta property="og:url" content="http://loogart.com/">
    <meta property="og:image" content="http://loogart.com/img/loogmoji/loog-mr-bean.gif">
    <title>Loogmoji | Loogart</title>
    <?php include 'php/header.php';?>
    <?php include 'php/facebook-pixel.php';?>
</head>

<body>

    <?php include './php/analyticstracking.php';?>
    <?php include './php/navbar.php';?>

    <main>
        <div class="container-fluid">

            <?php include './php/back.php';?>
            <!-- Jumbotron section -->
            <section class="portfolio-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>Loogmoji</h1>
                        <p>Meet the Loogmojis! A collection of pop-culture emojis by Loogart. The challenge behind these mini portraits consists of producing a quick design with the best possible likeness using minimal lines, colors and visual features. Some are animated, some are simply illustrated.</p>
                    </div>
                </div>
            </section>

            <!-- Loog section -->
            <section class="loogmoji-collection">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                       <!-- music -->
                        <h3>Music</h3>
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <img class="img-responsive b-lazy" data-src="./img/loogmoji/music/loogmoji-of-adele_by-loogart.png" alt="Loogmoji of Adele" title="Adele" />
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <img class="img-responsive b-lazy" data-src="./img/loogmoji/pop-culture/loogmoji-of-angelina-jolie_by-loogart.png" alt="Loogmoji of Angelina Jolie" title="Angelina Jolie" />
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <img class="img-responsive b-lazy" data-src="./img/loogmoji/pop-culture/loogmoji-of-austin-powers_by-loogart.png" alt="Loogmoji of Austin Powers" title="Austin Powers" />
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <img class="img-responsive b-lazy" data-src="./img/loogmoji/pop-culture/loogmoji-of-batman_by-loogart.png" alt="Loogmoji of Christian Bale <as></as> Batman" title="Christians Bale as Batman" />
                            </div>
                        </div>
                        <!-- pop culture -->
                        <h3>Pop culture</h3>
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <img class="img-responsive b-lazy" data-src="./img/loogmoji/music/loogmoji-of-adele_by-loogart.png" alt="Loogmoji of Adele" title="Adele" />
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <img class="img-responsive b-lazy" data-src="./img/loogmoji/pop-culture/loogmoji-of-angelina-jolie_by-loogart.png" alt="Loogmoji of Angelina Jolie" title="Angelina Jolie" />
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <img class="img-responsive b-lazy" data-src="./img/loogmoji/pop-culture/loogmoji-of-austin-powers_by-loogart.png" alt="Loogmoji of Austin Powers" title="Austin Powers" />
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                <img class="img-responsive b-lazy" data-src="./img/loogmoji/pop-culture/loogmoji-of-batman_by-loogart.png" alt="Loogmoji of Christian Bale <as></as> Batman" title="Christians Bale as Batman" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include './php/back.php';?>

        </div>
    </main>

    <?php include './php/footer.php';?>
    <script>
        fbq('track', 'ViewLoogmoji');

    </script>

</body>

</html>
