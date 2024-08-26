<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Loogart is a visual design studio that specializes in illustration, brand identity, small-scale animation and web design. Our work is featured in Montreal, Toronto, Ottawa and Gatineau.">
    <meta name="author" content="Chris Soueidan of Loogart">
    <meta property="og:title" content="Loogart">
    <meta property="og:description" content="Montreal-based Visual Design Studio">
    <meta property="og:url" content="http://loogart.com/">
    <meta property="og:image" content="http://loogart.com/img/loogart-screenshot.jpg">
    <title>Contact | Loogart</title>
    <?php include 'php/header.php';?>
    <?php include 'php/facebook-pixel.php';?>
</head>

<body>

    <?php include 'php/analyticstracking.php';?>
    <?php include './php/navbar.php';?>

    <main>
        <section class="contact">
            <div class="container">
                <h3>Get in touch with Loogart</h3>
                <p>Looking to work with Loogart on a new project? Send us an email and we will get back to you as soon as possible!</p>


                <!-- <form action="php/contactform.php" id="contact_form" method="post">-->
                <form method="POST" action="https://formspree.io/chris@loogart.com">

                    <div class="form-group">
                        <label for="your-name">Name</label>
                        <input class="form-control" id="your-name" type="text" name="first_name" placeholder="First Name and last name">
                    </div>
                    <!--<div class="form-group">
                        <label for="request-topic">Subject</label>
                        
                        <div class="select-69 has-feedback" id="request-topic">
                            <select name="subject" class="form-control selectpicker">
                                    <option value=" ">How can we help you?</option>
                                    <option>Commission</option>
                                    <option>Question</option>
                                    <option>Online shop</option>
                                    <option>Website bug</option>
                                    <option>Other</option>
                                </select>
                            <span class="glyphicon glyphicon-menu-down form-control-feedback" aria-hidden="true"></span>
                        </div>

                    </div>-->
                    <div class="form-group">
                        <label for="your-email">Email</label>
                        <input type="text" name="_replyto" placeholder="you@email.com" class="form-control">
                        <!--                        <input type="email" class="form-control" id="your-email" type="email" name="email" placeholder="you@email.com">-->
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" placeholder="Your message" rows="6" class="form-control"></textarea>
                        <!--                        <textarea class="form-control" id="message" rows="4" placeholder="Your message" name="comment"></textarea>-->
                    </div>
                    <input type="hidden" name="_subject" value="New Loogart message!" />
                    <input type="text" name="_gotcha" style="display:none" />
                    <input type="hidden" name="_next" value="https://loogart.com/#thankyou" />
                    <div class="form-group">
                        <button type="submit" name="action" class="btn btn-pink btn-block"><i class="fa fa-envelope-o" aria-hidden="true"></i> Send your message</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php include 'php/footer.php';?>
    <script>
        fbq('track', 'ViewContact');

    </script>

</body>

</html>
