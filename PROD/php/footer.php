<?php
echo '<footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5>Hire Loogart now.</h5>
                    <p>We create a visual language to help communicate your ideas to your clients. We do this through brand identity direction, illustration, animation, web design.
                    </p>
                </div>
                <div class="col-sm-3">
                    <h5>Reach us.</h5>
                    <ul class="list-unstyled">
                        <li><a href="http://facebook.com/loogart"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
                        <li><a href="http://instagram.com/loogart"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                        <li><a href="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email us</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <!-- Begin MailChimp Signup Form -->
                    <form action="//loogart.us7.list-manage.com/subscribe/post?u=318cbb07c865a88e681d7e59d&amp;id=e18344cbf9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <h5>Loog a day</h5>
                            <p>Be the first to see the next Loog of the Day via email.</p>
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
        <h6>© 2017 Loogart</h6>
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
                    <a href="portraits-loog-a-day" type="button" class="btn btn-default">Browse Loogs</a>
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/zoom.min.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/bootstrapvalidator.js"></script>
    <script src="js/loogart.js"></script>
        <script>
        if (window.location.href.indexOf("#thankyou") > -1) {
            $("#thankyou").modal("show");
        };
    </script>
        <script>
        if (window.location.href.indexOf("#errorPopup") > -1) {
            $("#errorPopup").modal("show");
        }
    </script>'
    ;?>