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
                        id: 71250608192,
                        node: document.getElementById('collection-component-c55fad8f87a'),
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
                                            "max-width": "calc(33.33333% - 30px)",
                                            "margin-left": "30px",
                                            "margin-bottom": "50px",
                                            "width": "calc(33.33333% - 30px)"
                                        }
                                    },
                                    "button": {
                                        "background-color": "#f75a56",
                                        "font-family": "Roboto, sans-serif",
                                        "padding-left": "100%px",
                                        "padding-right": "100%px",
                                        ":hover": {
                                            "background-color": "#de514d"
                                        },
                                        "border-radius": "40px",
                                        ":focus": {
                                            "background-color": "#de514d"
                                        },
                                        "font-weight": "bold"
                                    },
                                    "variantTitle": {
                                        "font-family": "Roboto, sans-serif",
                                        "font-weight": "normal"
                                    },
                                    "title": {
                                        "font-family": "Roboto, sans-serif",
                                        "font-size": "20px",
                                        "color": "#222222"
                                    },
                                    "description": {
                                        "font-family": "Roboto, sans-serif",
                                        "font-weight": "normal"
                                    },
                                    "price": {
                                        "font-family": "Roboto, sans-serif",
                                        "font-size": "26px",
                                        "color": "#138a85",
                                        "font-weight": "normal"
                                    },
                                    "compareAt": {
                                        "font-family": "Roboto, sans-serif",
                                        "font-weight": "normal",
                                        "color": "#138a85",
                                        "font-size": "22.099999999999998px"
                                    }
                                },
                                "googleFonts": [
                                    "Roboto",
                                    "Roboto",
                                    "Roboto",
                                    "Roboto",
                                    "Roboto",
                                    "Roboto"
                                ]
                            },
                            "cart": {
                                "contents": {
                                    "button": true
                                },
                                "styles": {
                                    "button": {
                                        "background-color": "#f75a56",
                                        "font-family": "Roboto, sans-serif",
                                        ":hover": {
                                            "background-color": "#de514d"
                                        },
                                        "border-radius": "40px",
                                        ":focus": {
                                            "background-color": "#de514d"
                                        },
                                        "font-weight": "bold"
                                    },
                                    "footer": {
                                        "background-color": "#ffffff"
                                    }
                                },
                                "googleFonts": [
                                    "Roboto"
                                ]
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
                                    },
                                    "button": {
                                        "background-color": "#f75a56",
                                        "font-family": "Roboto, sans-serif",
                                        "padding-left": "100%px",
                                        "padding-right": "100%px",
                                        ":hover": {
                                            "background-color": "#de514d"
                                        },
                                        "border-radius": "40px",
                                        ":focus": {
                                            "background-color": "#de514d"
                                        },
                                        "font-weight": "bold"
                                    },
                                    "variantTitle": {
                                        "font-family": "Roboto, sans-serif",
                                        "font-weight": "normal"
                                    },
                                    "title": {
                                        "font-family": "Roboto, sans-serif"
                                    },
                                    "description": {
                                        "font-family": "Roboto, sans-serif",
                                        "font-weight": "normal"
                                    },
                                    "price": {
                                        "font-family": "Roboto, sans-serif",
                                        "font-weight": "normal"
                                    },
                                    "compareAt": {
                                        "font-family": "Roboto, sans-serif",
                                        "font-weight": "normal"
                                    }
                                },
                                "googleFonts": [
                                    "Roboto",
                                    "Roboto",
                                    "Roboto",
                                    "Roboto",
                                    "Roboto",
                                    "Roboto"
                                ]
                            },
                            "toggle": {
                                "styles": {
                                    "toggle": {
                                        "font-family": "Roboto, sans-serif",
                                        "background-color": "#f75a56",
                                        ":hover": {
                                            "background-color": "#de514d"
                                        },
                                        ":focus": {
                                            "background-color": "#de514d"
                                        },
                                        "font-weight": "bold"
                                    },
                                    "count": {
                                        "color": "#ffffff",
                                        ":hover": {
                                            "color": "#ffffff"
                                        }
                                    },
                                    "iconPath": {
                                        "fill": "#ffffff"
                                    }
                                },
                                "googleFonts": [
                                    "Roboto"
                                ]
                            },
                            "option": {
                                "styles": {
                                    "label": {
                                        "font-family": "Roboto, sans-serif"
                                    },
                                    "select": {
                                        "font-family": "Roboto, sans-serif"
                                    }
                                },
                                "googleFonts": [
                                    "Roboto",
                                    "Roboto"
                                ]
                            },
                            "productSet": {
                                "styles": {
                                    "products": {
                                        "@media (min-width: 601px)": {
                                            "margin-left": "-30px"
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
</head>

<body>


    <?php include 'php/analyticstracking.php';?>
    <?php include 'php/navbar.php';?>

    <!-- petition -->
    <!--
    <div class="text-center">
        <div class="change-embed-petition" data-petition-id="12967259" style="padding-bottom:0"></div>
        <script src="https://static.change.org/product/embeds/v1/change-embeds.js" type="text/javascript"></script>
    </div>
-->

    <main class="container">
        <h1 class="sr-only">The Loogart Shop</h1>
        <h2>Shop Loogart Products</h2>

        <div id='collection-component-c55fad8f87a'></div>


    </main>

    <?php include 'php/footer.php';?>
    <script>
        fbq('track', 'ViewHome');

    </script>

</body>

</html>
