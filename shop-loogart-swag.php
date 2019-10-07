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
    <title>Loogart Swag | Loogart</title>
    <?php include 'php/header.php';?>
    <?php include 'php/facebook-pixel.php';?>


</head>

<body>


    <?php include 'php/analyticstracking.php';?>
    <div class="alert alert-info" role="alert" style="background-color:#444;color:white;border-radius:0;border:none">
        <div class="container text-center"><i class="fa fa-truck" aria-hidden="true"></i> $9.99 Flat shipping on all orders</div> 
    </div>
    <?php include 'php/navbar.php';?>
    <main>
        <div class="container">
            <ol class="breadcrumb breadcrumb-shop">
                <li><a href="./">Home</a></li>
                <li><a href="./shop">Shop</a></li>
                <li class="active">Loogart Swag</li>
            </ol>
            <h1 class="sr-only">The Loogart Shop</h1>
            <h2>Loogart Swag</h2>
            <p class="lead">A selection of original Loogart products made for daily use.</p>



            <div id='collection-component-1570465202519'></div>
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
                                id: '151033577536',
                                node: document.getElementById('collection-component-1570465202519'),
                                moneyFormat: '%24%7B%7Bamount%7D%7D',
                                options: {
                                    "product": {
                                        "styles": {
                                            "product": {
                                                "@media (min-width: 601px)": {
                                                    "max-width": "calc(33.33333% - 30px)",
                                                    "margin-left": "30px",
                                                    "margin-bottom": "50px",
                                                    "width": "calc(33.33333% - 30px)"
                                                }
                                            },
                                            "title": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-size": "17px",
                                                "color": "#222222"
                                            },
                                            "button": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-weight": "bold",
                                                ":hover": {
                                                    "background-color": "#4f4da7"
                                                },
                                                "background-color": "#5856b9",
                                                ":focus": {
                                                    "background-color": "#4f4da7"
                                                },
                                                "border-radius": "8px",
                                                "padding-left": "50px",
                                                "padding-right": "50px"
                                            },
                                            "price": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-size": "18px",
                                                "color": "#222222"
                                            },
                                            "compareAt": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-size": "15.299999999999999px",
                                                "color": "#222222"
                                            },
                                            "description": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-weight": "bold"
                                            }
                                        },
                                        "buttonDestination": "modal",
                                        "contents": {
                                            "options": false
                                        },
                                        "text": {
                                            "button": "view product"
                                        },
                                        "googleFonts": [
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
                                    },
                                    "modalProduct": {
                                        "contents": {
                                            "img": false,
                                            "imgWithCarousel": true,
                                            "button": false,
                                            "buttonWithQuantity": true
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
                                                "font-family": "Roboto, sans-serif",
                                                "font-weight": "bold",
                                                ":hover": {
                                                    "background-color": "#4f4da7"
                                                },
                                                "background-color": "#5856b9",
                                                ":focus": {
                                                    "background-color": "#4f4da7"
                                                },
                                                "border-radius": "8px",
                                                "padding-left": "50px",
                                                "padding-right": "50px"
                                            },
                                            "title": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-size": "30px",
                                                "color": "#5755b2"
                                            },
                                            "price": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-weight": "bold"
                                            },
                                            "compareAt": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-weight": "bold"
                                            },
                                            "description": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-weight": "bold"
                                            }
                                        },
                                        "googleFonts": [
                                            "Roboto"
                                        ],
                                        "text": {
                                            "button": "add to cart"
                                        }
                                    },
                                    "option": {
                                        "styles": {
                                            "label": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-weight": "bold"
                                            },
                                            "select": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-weight": "bold"
                                            }
                                        },
                                        "googleFonts": [
                                            "Roboto"
                                        ]
                                    },
                                    "cart": {
                                        "styles": {
                                            "button": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-weight": "bold",
                                                ":hover": {
                                                    "background-color": "#4f4da7"
                                                },
                                                "background-color": "#5856b9",
                                                ":focus": {
                                                    "background-color": "#4f4da7"
                                                },
                                                "border-radius": "8px"
                                            },
                                            "title": {
                                                "color": "#4c4c4c"
                                            },
                                            "header": {
                                                "color": "#4c4c4c"
                                            },
                                            "lineItems": {
                                                "color": "#4c4c4c"
                                            },
                                            "subtotalText": {
                                                "color": "#4c4c4c"
                                            },
                                            "subtotal": {
                                                "color": "#4c4c4c"
                                            },
                                            "notice": {
                                                "color": "#4c4c4c"
                                            },
                                            "currency": {
                                                "color": "#4c4c4c"
                                            },
                                            "close": {
                                                "color": "#4c4c4c",
                                                ":hover": {
                                                    "color": "#4c4c4c"
                                                }
                                            },
                                            "empty": {
                                                "color": "#4c4c4c"
                                            },
                                            "noteDescription": {
                                                "color": "#4c4c4c"
                                            },
                                            "discountText": {
                                                "color": "#4c4c4c"
                                            },
                                            "discountIcon": {
                                                "fill": "#4c4c4c"
                                            },
                                            "discountAmount": {
                                                "color": "#4c4c4c"
                                            }
                                        },
                                        "googleFonts": [
                                            "Roboto"
                                        ]
                                    },
                                    "toggle": {
                                        "styles": {
                                            "toggle": {
                                                "font-family": "Roboto, sans-serif",
                                                "font-weight": "bold",
                                                "background-color": "#5856b9",
                                                ":hover": {
                                                    "background-color": "#4f4da7"
                                                },
                                                ":focus": {
                                                    "background-color": "#4f4da7"
                                                }
                                            }
                                        },
                                        "googleFonts": [
                                            "Roboto"
                                        ]
                                    },
                                    "lineItem": {
                                        "styles": {
                                            "variantTitle": {
                                                "color": "#4c4c4c"
                                            },
                                            "title": {
                                                "color": "#4c4c4c"
                                            },
                                            "price": {
                                                "color": "#4c4c4c"
                                            },
                                            "fullPrice": {
                                                "color": "#4c4c4c"
                                            },
                                            "discount": {
                                                "color": "#4c4c4c"
                                            },
                                            "discountIcon": {
                                                "fill": "#4c4c4c"
                                            },
                                            "quantity": {
                                                "color": "#4c4c4c"
                                            },
                                            "quantityIncrement": {
                                                "color": "#4c4c4c",
                                                "border-color": "#4c4c4c"
                                            },
                                            "quantityDecrement": {
                                                "color": "#4c4c4c",
                                                "border-color": "#4c4c4c"
                                            },
                                            "quantityInput": {
                                                "color": "#4c4c4c",
                                                "border-color": "#4c4c4c"
                                            }
                                        }
                                    }
                                },
                            });
                        });
                    }
                })();
                /*]]>*/

            </script>
        </div>


        <div class="container-fluid">
        </div>
    </main>

    <?php include 'php/footer.php';?>
    <script>
        fbq('track', 'ViewHome');

    </script>

</body>

</html>
