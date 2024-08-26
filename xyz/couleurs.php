<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="FREE Loogart coloring pages">
    <meta name="author" content="Chris Soueidan of Loogart">
    <meta property="og:title" content="Loogart : Coloring Pages">
    <meta property="og:description" content="FREE Loogart coloring pages">
    <meta property="og:url" content="http://loogart.com/">
    <meta property="og:image" content="https://loogart.com/coloriage/img/couverture-gatinottawa.jpg">
    <title>Coloring Pages | Loogart</title>
    <?php include 'php/header.php';?>
    <?php include 'php/facebook-pixel.php';?>
    <style>
        .grey-bg{
            background-color:#f3f3f3;
            padding:4em 0;
        }
        img.img-book{
            border-radius: 20px;
            margin-top:30px;
            box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
        }
        a.book{
            text-decoration: none;
            display: block;
        }
        .img-book{
            transition: .25s all ease-in-out;
        }
                .img-book:hover{
            transform: translateY(-5px);
            filter: brightness(.8)
                
        }
        .book h4{
            color:#222;
            margin-top:40px;
            font-weight: bold;
        }
        .book p{
            color:#333;
        }

        footer{
            margin-top:0;
        }
    </style>

</head>

<body>


    <?php include 'php/analyticstracking.php';?>
    <?php include 'php/navbar.php';?>


    <main class="grey-bg">
       <div class="container">
            <h2><span class="label label-info">Gratuit | Free</span></h2>
            <h1 style="margin-bottom:24px">Pages à colorier / Coloring pages</h1>
            <p>Il y a quelques temps, <a href="https://brefmtl.com/" target="_blank">Bref</a> avait collaboré avec l'artiste Loogart pour réfléchir à certains quartiers de Montréal, en illustration. Suite à MTL, une deuxième vague d'illustrations a été créée pour Ottawa et Gatineau. En ce temps de confinement, on vous re-propose ces séries sous des livres à colorier à télécharger gratuitement. Vous y découvrirez 8 quartiers de Montréal, des points de repères connus à Ottawa et la ville de Gatineau. À colorier en famille ou entre colocs, à la maison.</p>
           <p>N'hésitez pas à nous identifier si vous partagez vos chef-d'oeuvres sur les réseaux sociaux! We would love to see your masterpieces online! <a href="https://www.instagram.com/explore/tags/brefmtl/" target="_blank">#brefmtl</a> + <a href="https://www.instagram.com/explore/tags/loogart/" target="_blank">#loogart</a></p>

            <div class="row" style="margin-top:30px;">
                <div class="col-sm-6 col-md-3">
                    <a class="book" href="./coloriage/gatinottawa.pdf" target="_blank">
                        <img class="img-responsive img-book" src="./coloriage/img/couverture-gatinottawa.jpg">
                        <h4>Gatinottawa</h4>
                        <p>Éducatif et divertissant. 'Gatinottawa', une série exclusive créée par l'illustrateur Loogart pour rassembler ces deux rives.</p>
                        <a href="./coloriage/gatinottawa.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Télécharger</a>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a class="book" href="./coloriage/montreal.pdf" target="_blank">
                        <img class="img-responsive img-book" src="./coloriage/img/couverture-montreal.jpg">
                        <h4>Quartier MTL</h4>
                        <p>Livre à colorier comprenant au total 8 dessins et un panorama à télécharger GRATUITEMENT. Vous y retrouverez les quartiers suivant: Hochelaga, Saint-Henri, Le Plateau, Mile End, Petite Italie, Griffintown, Le Village ainsi que Montréal, dans son ensemble.</p>
                        <a href="./coloriage/montreal.pdf" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Télécharger</a>
                    </a>
                </div>
                <div class="col-sm-6 col-md-5">
                    <a class="book" href="./coloriage/montreal-mosaique.jpg" target="_blank">
                        <img class="img-responsive img-book" src="./coloriage/img/couverture-mosaique.jpg">
                        <h4>Montréal Quartiers en mosaïque</h4>
                        <p>1 jumbo page qui regroupe les 8 quartiers présentés dans le livre à colorier. Pour les ligues majeures ;)</p>
                        <a href="./coloriage/montreal-mosaique.jpg" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Télécharger</a>
                    </a>
                </div>
            </div>
            <div class="row" style="margin-top:50px">
                <div class="col-sm-6">
                                

                </div>
            </div>
        </div>
    </main>

    <?php include 'php/footer.php';?>
    <script>
        fbq('track', 'ViewHome');

    </script>

</body>

</html>
