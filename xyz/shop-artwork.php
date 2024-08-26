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
    <main>
        <div class="container">
            <ol class="breadcrumb breadcrumb-shop">
                <li><a href="./">Home</a></li>
                <li><a href="./shop">Shop</a></li>
                <li class="active">Framed Art</li>
            </ol>
            <h1 class="sr-only">The Loogart Shop</h1>
            <h2>Loogart Framed Art</h2>
        </div>

        <img class="img-responsive img-spacing" src="./img/portfolio/citylines/photo-cityline-frames-room.jpg" alt="Montreal CityLine illustrations by Loogart">

        <div class="container-fluid">
            <div id='collection-component-ef565f2931a'></div>
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
                            domain: 'loogartshop.myshopify.com',
                            storefrontAccessToken: 'b9145295531bae67ab1387ce1216ccff',
                        });

                        ShopifyBuy.UI.onReady(client).then(function(ui) {
                            ui.createComponent('collection', {
                                id: 97354448960,
                                node: document.getElementById('collection-component-ef565f2931a'),
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
                                                },
                                                "imgWrapper": {
                                                    "position": "relative",
                                                    "height": "0",
                                                    "padding-top": "calc(75% + 15px)"
                                                },
                                                "img": {
                                                    "height": "calc(100% - 15px)",
                                                    "position": "absolute",
                                                    "left": "0",
                                                    "right": "0",
                                                    "top": "0"
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
    </main>

    <?php include 'php/footer.php';?>
    <script>
        fbq('track', 'ViewHome');

    </script>

</body>

</html>
