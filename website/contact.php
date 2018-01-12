<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Loogart is a visual design studio that specializes in illustration, brand identity, small-scale animation and web design. Our work is featured in Montreal, Toronto, Ottawa and Gatineau.">
    <meta name="author" content="Chris Soueidan of Loogart">
    <meta property="og:title" content="Loogart">
    <meta property="og:description" content="Montreal-based Visual Design Studio">
    <meta property="og:url" content="http://loogart.com/">
    <meta property="og:image" content="http://loogart.com/img/loogart-screenshot.jpg">
    <?php include 'php/favicons.php';?>

    <title>Contact | Loogart</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/zoom.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php include 'php/facebook-pixel.php';?>

</head>
<script>
    fbq('track', 'ViewContact');

</script>

<body>
    <?php include 'php/analyticstracking.php';?>
    <!-- Fixed navbar -->

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="./"><span class="logo-loogart"></span></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="about">about</a></li>
                    <li class="active"><a href="#!">contact</a></li>
                    <li><a href="https://www.instagram.com/loogart/"><i class="fa fa-instagram hidden-xs" aria-hidden="true"></i> <span class="visible-xs"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</span></a></li>
                    <li><a href="https://www.facebook.com/LoogArt/"><i class="fa fa-facebook-official hidden-xs" aria-hidden="true"></i> <span class="visible-xs"><i class="fa fa-facebook-official" aria-hidden="true"></i> Facebook</span></a></li>
                    <li><a href="https://www.behance.net/loogart"><i class="fa fa-behance hidden-xs" aria-hidden="true"></i> <span class="visible-xs"><i class="fa fa-behance" aria-hidden="true"></i> Behance</span></a></li>
                    <li><a href="http://loogart.tictail.com/"><i class="fa fa-shopping-bag hidden-xs" aria-hidden="true"></i> <span class="visible-xs"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Shop</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact form section -->
    <section class="contact">
        <div class="container">
            <h3>Send us an email :-)</h3>
            <p>Looking to work with Loogart on a new project? Send us an email and we will get back to you as soon as possible!</p>
            <form action="php/contactform.php" id="contact_form" method="post">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="first_name" placeholder="First Name and last name">
                </div>
                <div class="form-group">
                    <label for="name">Subject</label>
                    <div class="select-69 has-feedback">
                        <select name="subject" class="form-control selectpicker">
                                <option value=" ">How can we help you?</option>
                                <option>Commission</option>
                                <option>Question</option>
                                <option>Loog request</option>
                                <option>Website bug</option>
                                <option>Other</option>
                            </select>
                        <span class="glyphicon glyphicon-menu-down form-control-feedback" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" type="email" name="email" placeholder="you@email.com">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" rows="4" placeholder="Your message" name="comment"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="action" class="btn btn-pink btn-block"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send your message</button>
                </div>
            </form>
        </div>
    </section>

    <!-- footer -->
    <?php include 'php/footer.php';?>

</body>

</html>
