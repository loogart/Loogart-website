<?php
echo '

</main>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Hire Loogart now.</h5>
                    <p>We create a visual language to help communicate your ideas to your clients. We do this through brand identity direction, illustration, animation, web design.
                    </p>
                    <a href="mailto:chris@loogart.com"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Get in touch</a>
                </div>
                <div class="col-sm-3">
                    <h5>Reach us.</h5>
                    <ul class="list-unstyled">
                        <li><a href="http://facebook.com/loogart"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
                        <li><a href="http://instagram.com/loogart"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                        <li><a href="mailto:chris@loogart.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email us</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <!-- Begin MailChimp Signup Form -->
                    <form action="//loogart.us7.list-manage.com/subscribe/post?u=318cbb07c865a88e681d7e59d&amp;id=e18344cbf9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <h5><label for="mce-EMAIL">Loogart Newsletter</label></h5>
                            <p>We will talk about our latest projects and let you know about the newest products in our shop.</p>
                            <div class="input-group">
                                <input class="form-control on-dark" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_318cbb07c865a88e681d7e59d_e18344cbf9" tabindex="-1" value="">
                                </div>
                                <span class="input-group-btn">
                                    <!--<button class="btn btn-default" type="button">Subscribe</button>-->
                                    <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default">Subscribe</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <div class="lower-footer">
        <h6>© 2020 Loogart</h6>
    </div>
    <!-- Thank you modal -->
    <div class="modal popup fade" id="thankyou" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Thank you!</h3>
                </div>
                <div class="modal-body">
                    We will get back to you as soon as possible. If you want to reach us faster, try sending a message on <a href="https://www.facebook.com/LoogArt/" target="_blank">Facebook</a>.
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="loogmoji" type="button" class="btn btn-default">Browse Loogmojis</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Error modal -->
    <div class="modal popup fade" id="errorPopup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Mmmh...</h3>
                </div>
                <div class="modal-body">
                    Did you properly type your email address? Did you fill out all 3 fields?
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-default btn-wide" data-dismiss="modal">Try again</a>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/zoom.min.js"></script>
    <script src="./js/validate.js"></script>
    <script src="./js/bootstrapvalidator.js"></script>
    <script src="./js/flickity.pkgd.min.js"></script>
    <script src="./js/scrollreveal.js"></script>
    <script src="./js/loogart.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        if (window.location.href.indexOf("#thankyou") > -1) {
            $("#thankyou").modal("show");
        };
    </script>
    <script>
        if (window.location.href.indexOf("#errorPopup") > -1) {
            $("#errorPopup").modal("show");
        }
    </script>
    <script>
    $("#thankyou").modal("show") {
    fbq("track", "SubmitMessage"
    );
    </script>
    
    <script src="https://static.cdn-apple.com/businesschat/start-chat-button/2/index.js"></script>


    
    '
    ;?>
