<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Loogmoji: Your custom portrait by Loogart">
    <meta name="author" content="Chris Soueidan of Loogart">
    <meta property="og:title" content="Loogmoji">
    <meta property="og:description" content="Loogmoji: Buy a personalized caricature by Loogart">
    <meta property="og:url" content="http://loogart.com/">
    <meta property="og:image" content="https://loogart.com/img/loogmoji/photos/loogmoji-casey-neistat.jpeg">
    <title>Buy Loogmoji | Loogart</title>
    <?php include 'php/header.php';?>
    <?php include 'php/facebook-pixel.php';?>
    <!-- Hotjar Tracking Code for https://loogart.com/shop-custom-loogmoji -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1145479,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');

    </script>
</head>

<body>
    <?php include './php/analyticstracking.php';?>
    <?php include './php/navbar.php';?>
    <div class="container">
        <ol class="breadcrumb breadcrumb-shop">
            <li><a href="./">Home</a></li>
<!--            <li><a href="./shop">Shop</a></li>-->
            <li class="active">Your personal Loogmoji</li>
        </ol>
        <!--        <img class="text-left logo-loogmoji" src="./img/loogmoji/photos/logo_loogmoji-by-loogart.png" alt="Loogmoji Made by Loogart logo">-->
    </div>
    <style>
        .hero-loogmoji {
            max-width: 900px;
            display: inline-block;
            margin: auto;
        }

        @media(max-width:767px) {
            .hero-loogmoji {
                width: 100%;
                height: 260px;
                object-fit: cover;
            }
        }

        .img-cover {
            margin-bottom: 10px;
            margin-top: 10px;
            border-radius: 4px;
            height: 420px;
            width: 100%;
            object-fit: cover;
        }

        .img-fit {
            margin-bottom: 10px;
            margin-top: 10px;
            border-radius: 4px;
            height: 420px;
            width: 100%;
            object-fit: contain;
        }

    </style>
    <div style="width:100%;background-color:#23CFE7;display:block;overflow:hidden;text-align:center">
        <img src="./img/shop/banner-loogmoji.jpg" alt="" class="hero-loogmoji">
    </div>

    <div class="container">
        <div class="text-center" style="margin-top:50px;">
            <h1>Your <i>personal</i> Loogmoji</h1>
            <p class="lead">The Loogmoji is a fun and minimal emoji-like portrait of you.<br>Made by Loogart with minimal lines.</p>
        </div>
                <section class="portfolio-content" style="margin-bottom:40px">
            <div class="row text-center">
                <div class="col-12">
                    <!--
                    <h2>Get started.</h2>
                    <ol>
                        <li>Buy your <a href="https://www.instagram.com/explore/tags/loogmoji/" target="_blank">#Loogmoji</a>.</li>
                        <li>I email you with the next steps.</li>
                        <li>I draw your Loogmoji.</li>
                        <li>You receive a digital version of your Loogmoji.</li>
                    </ol>
-->
                    <div id='product-component-1609971044841' style="margin:auto"></div>
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
                                    ui.createComponent('product', {
                                        id: '2143371591744',
                                        variantId: '20349393633344',
                                        node: document.getElementById('product-component-1609971044841'),
                                        moneyFormat: '%24%7B%7Bamount%7D%7D',
                                        options: {
                                            "product": {
                                                "styles": {
                                                    "product": {
                                                        "@media (min-width: 601px)": {
                                                            "max-width": "calc(25% - 20px)",
                                                            "margin-left": "20px",
                                                            "margin-bottom": "50px",
                                                        }
                                                    },
                                                    "title": {
                                                        "font-family": "Roboto, sans-serif",
                                                        "color": "#222222"
                                                    },
                                                    "button": {
                                                        "font-family": "Roboto, sans-serif",
                                                        "font-weight": "bold",
                                                        "font-size": "16px",
                                                        "padding-top": "16px",
                                                        "padding-bottom": "16px",
                                                        ":hover": {
                                                            "background-color": "#dd5251"
                                                        },
                                                        "background-color": "#f55b5a",
                                                        ":focus": {
                                                            "background-color": "#dd5251"
                                                        },
                                                        "border-radius": "40px",
                                                        "padding-left": "100px",
                                                        "padding-right": "100px"
                                                    },
                                                    "quantityInput": {
                                                        "font-size": "16px",
                                                        "padding-top": "16px",
                                                        "padding-bottom": "16px"
                                                    },
                                                    "price": {
                                                        "font-family": "Roboto, sans-serif",
                                                        "color": "#222222",
                                                        "font-size":"28px",
                                                        "font-weight":"bold"
                                                    },
                                                    "compareAt": {
                                                        "font-family": "Roboto, sans-serif",
                                                        "color": "#222222"
                                                    },
                                                    "unitPrice": {
                                                        "font-family": "Roboto, sans-serif",
                                                        "color": "#222222"
                                                    },
                                                    "description": {
                                                        "font-family": "Roboto, sans-serif",
                                                        "font-weight": "bold"
                                                    }
                                                },
                                                "contents": {
                                                    "img": false,
                                                    "title": false,
                                                    "price": true,
                                                    "options": false
                                                },
                                                "text": {
                                                    "button": "Buy now"
                                                },
                                                "googleFonts": [
                                                    "Roboto"
                                                ]
                                            },
                                            "productSet": {
                                                "styles": {
                                                    "products": {
                                                        "@media (min-width: 601px)": {
                                                            "margin-left": "-20px"
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
                                                        "font-size": "16px",
                                                        "padding-top": "16px",
                                                        "padding-bottom": "16px",
                                                        ":hover": {
                                                            "background-color": "#dd5251"
                                                        },
                                                        "background-color": "#f55b5a",
                                                        ":focus": {
                                                            "background-color": "#dd5251"
                                                        },
                                                        "border-radius": "40px",
                                                        "padding-left": "100px",
                                                        "padding-right": "100px"
                                                    },
                                                    "quantityInput": {
                                                        "font-size": "16px",
                                                        "padding-top": "16px",
                                                        "padding-bottom": "16px"
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
                                                    "unitPrice": {
                                                        "font-family": "Roboto, sans-serif",
                                                        "font-weight": "bold",
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
                                                        "font-size": "16px",
                                                        "padding-top": "16px",
                                                        "padding-bottom": "16px",
                                                        ":hover": {
                                                            "background-color": "#dd5251"
                                                        },
                                                        "background-color": "#f55b5a",
                                                        ":focus": {
                                                            "background-color": "#dd5251"
                                                        },
                                                        "border-radius": "40px"
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
                                                "popup": false,
                                                "googleFonts": [
                                                    "Roboto"
                                                ]
                                            },
                                            "toggle": {
                                                "styles": {
                                                    "toggle": {
                                                        "font-family": "Roboto, sans-serif",
                                                        "font-weight": "bold",
                                                        "background-color": "#f55b5a",
                                                        ":hover": {
                                                            "background-color": "#dd5251"
                                                        },
                                                        ":focus": {
                                                            "background-color": "#dd5251"
                                                        }
                                                    },
                                                    "count": {
                                                        "font-size": "16px"
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

                    <br>
                    <div style="max-width:600px;margin: 30px auto 15px">
                        <small><strong>What's included: </strong>(1) High resolution digital versions of the artwork for web and print, (2) License to use artwork everywhere on the internet forever. <strong>How it works: </strong> Following your purchase, Loogart will email you within the next day to gather photos and get started.</small>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <div class="container" style="margin-top:50px">
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <blockquote class="twitter-tweet">
                    <p lang="en" dir="ltr">which is the real Casey? <a href="https://t.co/1x3W5oBSio">pic.twitter.com/1x3W5oBSio</a></p>&mdash; Casey Neistat (@Casey) <a href="https://twitter.com/Casey/status/933016922471436288?ref_src=twsrc%5Etfw">November 21, 2017</a>
                </blockquote>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-md-4">
                <img class="img-cover" src="./img/loogmoji/photos/loogmoji-justin-trudeau.jpg" alt="Prime Minister Justin Trudeau holding his Loogmoji caricature by Loogart" title="Prime Minister Justin Trudeau holding his Loogmoji caricature by Loogart">
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BbxbQnWltRI/" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                    <div style="padding:16px;"> <a href="https://www.instagram.com/p/BbxbQnWltRI/" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
                            <div style=" display: flex; flex-direction: row; align-items: center;">
                                <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                </div>
                            </div>
                            <div style="padding: 19% 0;"></div>
                            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                            <g>
                                                <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></div>
                            <div style="padding-top: 8px;">
                                <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div>
                            </div>
                            <div style="padding: 12.5% 0;"></div>
                            <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                <div>
                                    <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                    <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                    <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                </div>
                                <div style="margin-left: 8px;">
                                    <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                    <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                </div>
                                <div style="margin-left: auto;">
                                    <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                    <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                    <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                </div>
                            </div>
                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                            </div>
                        </a>
                        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BbxbQnWltRI/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by LENARD (@cthagod)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-11-21T21:24:52+00:00">Nov 21, 2017 at 1:24pm PST</time></p>
                    </div>
                </blockquote>
                <script async src="//www.instagram.com/embed.js"></script>
            </div>
            <div class="col-md-4">
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Bf9i8jigEwS/" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                    <div style="padding:16px;"> <a href="https://www.instagram.com/p/Bf9i8jigEwS/" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank">
                            <div style=" display: flex; flex-direction: row; align-items: center;">
                                <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                                    <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                                </div>
                            </div>
                            <div style="padding: 19% 0;"></div>
                            <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                            <g>
                                                <path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg></div>
                            <div style="padding-top: 8px;">
                                <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div>
                            </div>
                            <div style="padding: 12.5% 0;"></div>
                            <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                <div>
                                    <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                                    <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                                    <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                                </div>
                                <div style="margin-left: 8px;">
                                    <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                                    <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div>
                                </div>
                                <div style="margin-left: auto;">
                                    <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                                    <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                                    <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                                </div>
                            </div>
                            <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                                <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
                            </div>
                        </a>
                        <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Bf9i8jigEwS/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Marc Anthony (@marcanthony)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-03-06T00:28:30+00:00">Mar 5, 2018 at 4:28pm PST</time></p>
                    </div>
                </blockquote>
                <script async src="//www.instagram.com/embed.js"></script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <img class="img-cover" src="./img/loogmoji/photos/loogmoji-gary-vee-by-loogart.JPG" alt="Gary Vaynerchuk Loogmoji by Loogart" title="Gary Vaynerchuk Loogmoji by Loogart">
            </div>
            <div class="col-md-4">
                <img class="img-cover" src="./img/loogmoji/photos/loogmoji-grant-cardone.JPG" alt="Grant Cardone and his custom Loogmoji by Loogart" title="Grant Cardone's custom Loogmoji">
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <img class="img-fit" src="./img/loogmoji/photos/loogmoji-russell-peters-ottawa.jpg" alt="Russell Peters Loogmoji by Loogart on Instagram" title="Russell Peters' Loogmoji on his Instagram Story">
            </div>
            <div class="col-md-4">
                <img class="img-fit" src="./img/loogmoji/photos/loogmoji-tai-lopez.jpg" alt="Tai Lopez printed Loogmoji by Loogart on canvas on Snapchat Story" title="Tai Lopez's Loogmoji on his Instagram Story">
            </div>
        </div>
    </div>





    <?php include './php/footer.php';?>
    <script>
        fbq('track', 'ViewLoogmoji');

    </script>

</body>

</html>
