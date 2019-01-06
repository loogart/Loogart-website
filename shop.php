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


    <main class="container">
        <h1 class="sr-only">The Loogart Shop</h1>
        <h2>Shop Loogart Products</h2>
        <div class="row crds">
            <div class="col-sm-4">
                <a href="./shop-custom-loogmoji">
                    <img class="img-spacing" src="./img/loogmoji/photos/loogmoji-casey-neistat.jpeg" alt="loogmoji of casey neistat">
                    <h4>Shop Custom Loogmoji</h4>
                    <p>The Loogmoji is a fun, bold and creative piece of art that portrays who you are. With minimal lines, Loogart creates an emoji-like portrait of you. That's right, this is custom artwork, for you.</p>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="./shop-artwork">
                    <img class="img-spacing" src="./img/portfolio/citylines/photo-cityline-frames-room.jpg" alt="loogmoji of casey neistat">
                    <h4>Shop CityLine Framed Prints</h4>
                    <p>Looking to decorate your wall and showcase a city you love? The Loogart CityLine Collection are fun, bold and simplified illustrations that represent various cities and neighbourhoods.</p>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="https://cucucovers.com/collections/loogmoji" target="_blank">
                    <img class="img-spacing" src="./img/loogmoji/photos/cucu-loogart-covers-blog-to.jpg" alt="loogmoji of casey neistat">
                    <h4>Shop CUCU Covers</h4>
                    <p>Personalize any card in seconds. Stick-On Covers for Bank Cards, Transit Passes, Gift Cards and more! </p>
                </a>
            </div>            
        </div>

    </main>

    <?php include 'php/footer.php';?>
    <script>
        fbq('track', 'ViewHome');

    </script>

</body>

</html>
