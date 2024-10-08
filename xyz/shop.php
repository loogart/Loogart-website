<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Shop Loogart products. Perfect for gifts for any occasion">
    <meta name="author" content="Chris Soueidan of Loogart">
    <meta property="og:title" content="Loogart Shop">
    <meta property="og:description" content="Shop Loogart products. Perfect for gifts for any occasion">
    <meta property="og:url" content="http://loogart.com/">
    <meta property="og:image" content="http://loogart.com/img/loogart-bio-2018.jpg">
    <title>Shop | Loogart</title>
    <?php include 'php/header.php';?>
    <?php include 'php/facebook-pixel.php';?>

</head>

<body>


    <?php include 'php/analyticstracking.php';?>
    <?php include 'php/navbar.php';?>


    <main class="container text-center">
        <section class="shop">
            <h1 class="sr-only">The Loogart Shop</h1>
            <div class="alert alert-warning alert-dismissible text-left" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Covid-19:</strong>  <br>This is a difficult time for everyone and Loogart is working hard to adapt to this new reality. We're experiencing many delays with production and shipping times for all products. Thank you for your understanding and stay safe.
            </div>
            <h2 class="sr-only">The Loogart Shop</h2>
            <div class="row">
                <div class="col-sm-12">
                    <a href="./shop-custom-loogmoji">
                        <div class="product-box product-loogmoji">
                            <h3>Your personal Loogmoji.</h3>
                            <p>An emoji-like portrait of you by Loogart. For personal use only.</p>
                            <p class="link-btn">Buy <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="./shop-artwork">
                        <div class="product-box product-framed-art">
                            <h3>Framed Art</h3>
                            <p>Original designs by Loogart ready to be displayed on your wall.</p>
                            <p class="link-btn">Buy <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="./shop-loogart-swag">
                        <div class="product-box product-swag">
                            <h3>Loogart Swag</h3>
                            <p>Original Loogart accessories and items.</p>
                            <p class="link-btn" style="color:black">Buy <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="https://brefmtl.com/collections/boutique/Loogart" target="_blank">
                        <div class="product-box product-bref">
                            <h3>Bref MTL Collection</h3>
                            <p>Products created in partnership with Bref MTL.</p>
                            <p class="link-btn">Buy <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="https://cucucovers.com/collections/loogmoji" target="_blank">
                        <div class="product-box product-cucu">
                            <h3>CUCU Covers</h3>
                            <p>Personalize bank cards, transit passes and gift cards in seconds.</p>
                            <p class="link-btn">Buy <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'php/footer.php';?>
    <script>
        fbq('track', 'ViewHome');

    </script>

</body>

</html>
