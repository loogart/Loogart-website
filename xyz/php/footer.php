<?php
echo '

</main>
<footer>
    <div class="container text-center">
        <ul class="list-inline" style="margin-top:auto">
            <li><a href="https://loogart.notion.site/Made-by-Loogart-054248070f524714aa9b7d3eb2e6ed9a?pvs=4" target="_blank">✨ New work</a></li>
            <li><a href="https://loog.art/" target="_blank"> ⚡️ quick links</a></li>
            <li><a href="http://instagram.com/loogart" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
            <li><a href="https://vimeo.com/loogart" target="_blank"><i class="fa fa-vimeo" aria-hidden="true"></i> Vimeo</span></a></li>
            <li><a href="http://facebook.com/loogart" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</a></li>
            <li><a href="mailto:chris@loogart.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> chris@loogart.com</a></li>
        </ul>
        </div>
    </div>
</footer>
<div class="lower-footer" style="padding:30px 0">
<div class="container">
        <small>© 2013-present. Loogart. All rights reserved.</small>
        <!--<small> All texts, photos, graphics and the order thereof are subject to copyright and all other laws for the protection of intellectual property. They may not be copied for trading or for passing on to third parties, nor may they be changed and used on other websites.</small>-->
        </div>
    </div>
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
