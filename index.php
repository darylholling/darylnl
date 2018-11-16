<?php

include('vendor/autoload.php');
require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
//if (isset($_POST['submit'])) {
//    $name = $_POST['name'];
//    $email = $_POST['email'];
//    $message = $_POST['message'];
//    $from = 'From: TangledDemo';
//    $to = 'darylholling@gmail.com';
//    $subject = 'Nieuw Contact @ darylholling.nl';
//
//    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
//    if (mail($to, $subject, $body, $from)) {
//        echo '<p>Your message has been sent!</p>';
//    } else {
//        echo '<p>Something went wrong, go back and try again!</p>';
//    }
//}
if (isset($_POST['submit'])) {

    $ontvanger = 'darylholling@gmail.com';
    $naamontvanger = 'daryl';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
    $transport = Swift_MailTransport::newInstance();
//    $transport = Swift_MailTransport::newInstance('localhost', 25)
//    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')->setUsername('username')->setPassword('password');
    $message = Swift_Message::newInstance();

    $message->setTo(array(
        $ontvanger => $naamontvanger,
    ));
    $name = $_POST['name'];
    $email = $_POST['email'];
    $content = $_POST['message'];
    $to = 'darylholling@gmail.com';
    $subject = 'Nieuw Contact @ darylholling.nl';

    $message->setSubject($subject);
    $message->setBody($content, 'text/html');
    $message->setFrom($email, $name);
    $mailer = Swift_Mailer::newInstance($transport);
    $mailer->send($message);


    if ($mailer){
        print("<script>alert('Thanks for your enquiry, I will contact you ASAP!');</script>");
    }else{
        print("<script>alert('Email failed to deliver! Please use Email meat My Work');</script>");
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daryl Holling | Student Webdeveloper</title>
    <link rel="shortcut icon" type="image/x-icon" href="headlogo.png"/>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="js.js"></script>
</head>
<body>
<!--Start landing area with background-->
<div id="fullscreen-hero" class="landing">
    <!--        <div class="menubar">-->
    <!--            <ul>-->
    <!--                <li><a href="#">Home</a></li>-->
    <!--                <li><a href="#">My expertise</a></li>-->
    <!--                <li><a href="#">Projects</a></li>-->
    <!--                <li><a href="#">Contact</a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <div class="aboutme">
        <h1 class="remove">Hi I'm Daryl,</h1>
        <!--        <h4>I am a 21 y/o application/media developer student living in the Netherlands. <br>In my daily life I strive-->
        <!--            to be sophisticated and learn something new every day!</h4>-->
        <h4>a 22 year old application/media developer student <br> who strives to be sophisticated and learn something new
            every day.</h4>
    </div>
    <div class="learn-more">
        <a href="#expertise" class="page-scroll tophover">
            Learn more about what I do
            <br>
            <i class="fa fa-chevron-down"></i></a>
    </div>
</div>
<div id="expertise">
    <div class="container">
        <div class="row">
            <div class="eight columns offset-by-two">
                <h1 class="center title">My expertise</h1>
            </div>
        </div>
        <div class="row">
            <div class="skillstext col-xs-12 col-md-4">
                <div class="expertiseblock center">
                    <h4 class="title">Code</h4>
                    <i class="fa fa-code my-blue"></i>
                    <p class="summary lightp">
                        To create websites I make use of HTML5, CSS3 with bootstrap, Javascript with jQuery and PHP.
                        Currently I am learning how to work with Laravel and Vue.js 2.0
                    </p>
                </div>
            </div>
            <div class="skillstext col-xs-12 col-md-4 center">
                <div class="expertiseblock">
                    <h4 class="title">Design</h4>
                    <i class="fa fa-magic my-blue"></i>
                    <p class="summary lightp">
                        For designs I make use of Adobe Photoshop CC 2017. I can make designs from scratch or make
                        tweaks to existing designs.
                        <br>The best part is turning designs into reality.
                    </p>
                </div>
            </div>
            <div class="skillstext col-xs-12 col-md-4 center">
                <div class="expertiseblock">
                    <h4 class="title">Wordpress</h4>
                    <i class="fa fa-wordpress my-blue"></i>
                    <p class="summary lightp">
                        <!--                        When making Wordpress sites I like to use custom templates, or create theme's and plugins from scratch so it has everything you can wish for.-->
                        When creating Wordpress sites I like to make minimal use of theme's and plugins. The best part
                        is creating them yourself so it has everything you can wish for.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="projects">
    <div class="container workbottom">
        <div class="row">
            <div class="center">
                <h1 class="introwork">My work</h1>
                <p class="statement">Want to see or get to know more about my work? <a
                            href="mailto:darylholling@gmail.com">Email me</a>.</p>
                <a href="#work-together" class="page-scroll workhover">
                    Or <i>get in touch</i> using the form.
                    <br>
                    <i class="fa fa-chevron-down workframe"></i></a>
            </div>
        </div>
        <section class="showcase">
            <div class="row">
                <div class="column pull-right col-xs-12 col-sm-6 col-md-6">
                    <!--                    Trigger the modal-->
                    <img id="myImg" src="tourguidegolf.PNG" alt="Image" class="project-image" href="#0">
                </div>
                <!-- The Modal -->
                <div id="myModal" class="modalimage">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content sizes" id="img01">

                    <button type="button" class="btn btn-default custom-close" data-dismiss="mymodal">Close</button>

                </div>
                <div class="column pull-left col-xs-12 col-sm-6 col-md-6">
                    <h3>Tourguide Golf</h3>
                    <p class="siteinfo lightp">
                        Tourguide Golf is an online platform created for golf pro's and enthousiasts to make it easier
                        to book all the needed travel arrangements when attending a golf event.
                    </p>
                    <a href="https://tourguide.golf" target="_blank" class="button button-primary">Visit Website</a>
                </div>
            </div>
        </section>
        <!--        <section class="showcase">-->
        <!--            <div class="row">-->
        <!--                <div class="column pull-right txtright">-->
        <!--                    <h3>Tourguide Golf</h3>-->
        <!--                    <p class="siteinfo lightp">Doggo ipsum shoober doggo such treat sub woofer smol, waggy wags yapper-->
        <!--                        very good-->
        <!--                        spot mlem ruff, borkf fat boi ruff.</p>-->
        <!--                    <a href="https://tourguide.golf" target="_blank" class="button button-primary">Visit Website</a>-->
        <!---->
        <!--                </div>-->
        <!--                <div class="column pull-left">-->
        <!--                    <img src="lappyondesk.jpg" alt="image" class="project-image">-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </section>-->
    </div>
</div>
<!--Modal Form CONTACT-->
<!-- Modal body -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title contactintro" id="exampleModalLabel">Almost there...</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <section class="body">
                    <form method="post" action="index.php">
                        <p class="contactmodalintro">After submitting the form I will get in touch with you. <br>Expect
                            a reply from me in about a day.</p>
                        <label>Name*</label>
                        <input name="name" required="required" placeholder="Name">

                        <label>Email*</label>
                        <input name="email" type="email" required="required" placeholder="Email address">

                        <label>Message*</label>
                        <textarea name="message" required="required"
                                  placeholder="Tell me something about your project. Why are you creating it? What do you wish to accomplish? What can I do to help you?"></textarea>

                        <br>* is required<br>
                        <input id="submit" name="submit" type="submit" value="Submit" class="contactsubmit">
                    </form>
                </section>
            </div>
            <div class="modal-footer contactmodal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--endmodal-->
<div id="work-together">
    <div class="container">
        <div class="contacttxt">

            <h2 class="contactintro">Let's create something great!</h2>
            <p class="workintro remove">Want to work together? <br>
                Feel free to tell me about your project, I'd love to hear all about it! </p>
            <a href="mailto:darylholling@gmail.com" data-type="modal-trigger" class="button button-contact"
               data-toggle="modal" data-target="#contactModal">
                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                Get in Touch
            </a>
        </div>
    </div>
</div>
<footer>
    <div id="footer">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="Logo_Daryl_holling11.png" class="footerlogo">
                </a>
            </div>
            <div class="copyrights">
                <p class="copyright">&copy; 2018 Daryl Holling</p>
            </div>
            <div class="media">
                <a href="https://www.linkedin.com/in/daryl-holling-6b4408124/" target="_blank">
                    <i class="fa fa-linkedin-square fa-2x linkedin mediaradius" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</footer>


</body>
<script>
    $("#contactModal form").submit(function(e) {
        var url = "index.php"; // the script where you handle the form input.
        $.ajax({
            type: "POST",
            url: url,
            data: $(this).serialize(), // serializes the form's elements.
            success: function(data) {
                $(this).html("Thanks for your enquiry!");
            }
        });
        e.preventDefault(); // avoid to execute the actual submit of the form.
    });

    // get modal
    var modal = document.getElementById('myModal');
    var root = document.getElementsByTagName('html')[0];
    // put image in modal
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var wd = window.innerWidth;
    if (wd <= 750) {

    } else {
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            root.classList.add('modal-open');
        };
    }

    // elements to close modal
    var span = document.getElementsByClassName("close")[0];
    var customClose = document.getElementsByClassName("custom-close")[0];

    // close modal
    span.onclick = function () {
        modal.style.display = "none";
        root.classList.remove('modal-open');
    };
    customClose.onclick = function () {
        modal.style.display = "none";
        root.classList.remove('modal-open');
    };

</script>
</html>
