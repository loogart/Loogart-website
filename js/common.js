// common.js

// Function to load the navbar
function loadNavbar() {
    const navbarHTML = `
        <header>
<nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./"><p>Loogart</p><span class="logo-loogart"></span></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li id="newWork"><a href="https://loogart.notion.site/Made-by-Loogart-054248070f524714aa9b7d3eb2e6ed9a?pvs=4" target="_blank">✨ new work</a></li>
                        <li id="shopPage"><a href="https://shop.loogart.com" target="_blank">my shop</a></li>
                        <li><a href="mailto:chris@loogart.com">contact</a></li>
                        <li><a href="about">about</a></li>
                        <li><a href="https://www.instagram.com/loogart/" target="_blank"><i class="fa fa-instagram hidden-xs" aria-hidden="true"></i> <span class="visible-xs"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</span></a></li>
                        <li><a href="https://vimeo.com/loogart" target="_blank"><i class="fa fa-vimeo hidden-xs" aria-hidden="true"></i> <span class="visible-xs"><i class="fa fa-vimeo" aria-hidden="true"></i> Vimeo</span></a></li>
                        <li><a href="https://www.facebook.com/LoogArt/" target="_blank"><i class="fa fa-facebook-official hidden-xs" aria-hidden="true"></i> <span class="visible-xs"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</span></a></li>
                        <li><a href="https://www.behance.net/loogart" target="_blank"><i class="fa fa-behance hidden-xs" aria-hidden="true"></i> <span class="visible-xs"><i class="fa fa-behance" aria-hidden="true"></i> Behance</span></a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>;
    document.getElementById('navbar').innerHTML = navbarHTML;
}

// Function to load the footer
function loadFooter() {
    const footerHTML = `
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
<div class="lower-footer">
<div class="container">
        <small>© 2013-present. Loogart. All rights reserved.</small>
    </div>
</div>
</footer>
    `;
    document.getElementById('footer').innerHTML = footerHTML;
}

// Call the functions when the page loads
window.onload = function() {
    loadNavbar();
    loadFooter();
};