<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Shop Loogart CUCU Covers. Personalize bank cards, transit passes and gift cards in seconds.">
    <meta name="author" content="Chris Soueidan of Loogart">
    <meta property="og:title" content="Loogart Shop CUCU COvers">
    <meta property="og:description" content="Shop Loogart CUCU Covers. Personalize bank cards, transit passes and gift cards in seconds.">
    <meta property="og:url" content="http://loogart.com/">
    <meta property="og:image" content="http://loogart.com/img/loogmoji/photos/loogmoji-made-by-looogart.jpg">
    <title>Shop | Loogart</title>
    <?php include 'php/header.php';?>
    <?php include 'php/facebook-pixel.php';?>

</head>

<body>


    <?php include 'php/analyticstracking.php';?>
    <?php include 'php/navbar.php';?>


    <main class="container">

        <ol class="breadcrumb breadcrumb-shop">
            <li><a href="./">Home</a></li>
            <li><a href="./shop">Shop</a></li>
            <li class="active">Loogmoji CUCU Covers</li>
        </ol>
        
        <section class="shop">
            <h1 class="sr-only">Loogmoji CUCU Covers</h1>
            <h2>Loogmoji CUCU Covers</h2>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8">
                    <div id='collection-component-6248f05bf06'></div>
                    <script type="text/javascript">
                        /*<![CDATA[*/

                        (function() {
                            var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
                            if (window.ShopifyBuy) {
                                if (window.ShopifyBuy.UI) {
                                    ShopifyBuyInit();
                                } else {
                                    loadScript();
                                }
                            } else {
                                loadScript();
                            }

                            function loadScript() {
                                var script = document.createElement('script');
                                script.async = true;
                                script.src = scriptURL;
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                                script.onload = ShopifyBuyInit;
                            }

                            function ShopifyBuyInit() {
                                var client = ShopifyBuy.buildClient({
                                    domain: 'cucucovers.myshopify.com',
                                    storefrontAccessToken: 'e96c15aa4229d147d102407bdc52b690',
                                });

                                ShopifyBuy.UI.onReady(client).then(function(ui) {
                                    ui.createComponent('collection', {
                                        id: 58627063869,
                                        node: document.getElementById('collection-component-6248f05bf06'),
                                        moneyFormat: '%24%7B%7Bamount%7D%7D',
                                        options: {
                                            "product": {
                                                "buttonDestination": "modal",
                                                "variantId": "all",
                                                "contents": {
                                                    "imgWithCarousel": false,
                                                    "variantTitle": false,
                                                    "options": false,
                                                    "description": false,
                                                    "buttonWithQuantity": false,
                                                    "quantity": false
                                                },
                                                "text": {
                                                    "button": "VIEW PRODUCT"
                                                },
                                                "styles": {
                                                    "product": {
                                                        "@media (min-width: 601px)": {
                                                            "max-width": "calc(50% - 40px)",
                                                            "margin-left": "40px",
                                                            "margin-bottom": "50px",
                                                            "width": "calc(50% - 40px)"
                                                        }
                                                    }
                                                }
                                            },
                                            "cart": {
                                                "contents": {
                                                    "button": true
                                                },
                                                "styles": {
                                                    "footer": {
                                                        "background-color": "#ffffff"
                                                    }
                                                }
                                            },
                                            "modalProduct": {
                                                "contents": {
                                                    "img": false,
                                                    "imgWithCarousel": true,
                                                    "variantTitle": false,
                                                    "buttonWithQuantity": true,
                                                    "button": false,
                                                    "quantity": false
                                                },
                                                "styles": {
                                                    "product": {
                                                        "@media (min-width: 601px)": {
                                                            "max-width": "100%",
                                                            "margin-left": "0px",
                                                            "margin-bottom": "0px"
                                                        }
                                                    }
                                                }
                                            },
                                            "productSet": {
                                                "styles": {
                                                    "products": {
                                                        "@media (min-width: 601px)": {
                                                            "margin-left": "-40px"
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    });
                                });
                            }
                        })();
                        /*]]>*/

                    </script>

                </div>

            </div>
        </section>
    </main>

    <?php include 'php/footer.php';?>
    < script>
        fbq('track', 'ViewHome');

        </script>

</body>

</html>
