<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta title="Thank you for registering your email! | 'What Lies Ahead' by Katherine Wilkerson">
<meta name="author" content="Chris Bolor | www.ChrisBolor.com">
<meta name="description" content="(this a project based on a fictitious author and book launch; enjoy)">
<meta name="keywords" content="landing page, opt-in page, optin, web development, web design">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body id="thank-you">
  <!--
  <video id="videoBG" poster="placeholder.jpg" loop muted autoplay>
      <source type="video/mp4" src="170216A_093_SnowyMountain_1080p.mp4"></source>
  </video>
-->
<!--
  <iframe id="videoBG" width="" height="" src="https://www.youtube.com/embed/r3JeXCS1RbQ?autoplay=1&controls=0&showinfo=0&autohide=1" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
-->


<!-- Start EasyHtml5Video.com BODY section -->

    <video autoplay="autoplay" poster="170216A_093_SnowyMountain_1080p.jpg" id="videoBG" title="170216A_093_SnowyMountain_1080p-edited" loop="loop" onended="var v=this;setTimeout(function(){v.play()},300)">
        <source src="170216A_093_SnowyMountain_1080p.mp4" />
        <source src="170216A_093_SnowyMountain_1080p.webm" type="video/webm" />
        <source src="170216A_093_SnowyMountain_1080p.ogv" type="video/ogg" />
    </video>
<!--
<div class="eh5v_script"><a href="http://easyhtml5video.com">html 5 video</a> by EasyHtml5Video.com v3.9.1</div></div>
-->
<script src="html5ext.js" type="text/javascript"></script>
<!-- End EasyHtml5Video.com BODY section -->
<noscript>

</noscript>
<main id="mainWrapper" class="container-fluid">

    <section id="mainSection" class="col-sm-10">
        <div class="loadable" id="mainImageWrapper"></div>
        <header class="">
            <h1 id="mainTitle" class="text-right">What Lies Ahead</h1>
            <p class="caption text-right" id="mainCaption">by Katherine Wilkerson</p>
          </header>


        <p class="description row" id="descSolo">
            <!-- insert PHP below -->
              <?php

                  $email = '';
                  $email = $_POST['email'];

                  /* VALIDATE EMAIL */
                  {
                      function test_input($data) {
                              $data = trim($data);
                              $data = stripslashes($data);
                              $data = htmlspecialchars($data);
                              return $data;
                          }

                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                              $email = test_input($_POST["email"]);
                          }
                  }


                  /* DISPLAY EMAIL CONFIRMATION */
                  {
                    echo "<p>We have succesfully registered your email address of: <strong>";
                    echo $email;
                    echo "</strong>.</p>";
                    echo "<p>We will notify you as soon as the book releases. You will also receive other news and events from the author Katherine Wilkerson. Thank you!</p>";
                  }


                  /* SEND EMAIL TO ADMIN */
                  {

                      $to = 'chris@chrisbolor.com';
                      $from = 'chris@chrisbolor.com';
                      $subject = "NEW SUBSCRIBER | 'What Lies Ahead' - Pre-launch";

                      $headers = '';
                      $headers .= 'From: ' . $from . "\r\n";
                      $headers .= "MIME-VERSION : 1.0\r\n";
                      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                      $message = '';
                      $message .= "<html><body>";
                      $message .= "<h1 style='text-align: center;'>NEW SUBSCRIBER</h1>";
                      $message .= "'<h2 class='text-align: center;'>'What Lies Ahead' - Pre-launch</h2>";
                      $message .= "<p>Congratulations! We just received a new subscriber.</p>
                                    <p>Here are the details:</p>";
                      $message .= "<p><strong>";
                      $message .= $email;
                      $message .= "</strong></p>";
                      $message .= "<p>Be sure to keep this person updated on launch and other relevant details!</p>";
                      $message .= "<br> - Chris Bolor | <a href='www.chrisbolor.com'>wwwChrisBolor.com</a>";
                      $message .= "</body></html>";

                      mail($to, $subject, $message, $headers);

                  }

                  /* SEND EMAIL TO SUBSCRIBER */
                  {
                    $to = $email;
                    $from = 'chris@chrisbolor.com';
                    $subject = "Thank you for subscribing to 'What Lies Ahead'!";

                    $headers = '';
                    $headers .= 'From: ' . $from . "\r\n";
                    $headers .= "MIME-VERSION : 1.0\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                    $message = '';
                    $message .= "<html><body>";
                    $message .= "<h1 style='text-align: center;'>THANK YOU FOR SUBSCRIBING</h1>";
                    $message .= "'<span class='text-align: center;'>'What Lies Ahead' - Pre-launch</span>";
                    $message .= "<p>Thank you for taking the time to register your email address.</p>
                                  <p>When will notify you when the book hits shelves this <strong>December 15th</strong>.</p>";
                    $message .= "<p>Be sure to check your email regularly (please check the 'junk' or 'spam' folder as well as sometimes these emails can end up there.)</p>";
                    $message .= "<br><br> - Chris Bolor | <a href='www.chrisbolor.com'>www.ChrisBolor.com</a>";
                    $message .= "<br><br><hr><br><br><p style='font-weight: bold; font-size: 8px;'>";
                    $message .= "NOTE: This email is part of a project from <a href='www.chrisbolor.com'>Chris Bolor</a>. Sadly no book launch is coming :(. Hope you enjoyed this project!";
                    $message .= "</p><br><br><br>";
                    $message .= "</body></html>";

                    mail($to, $subject, $message, $headers);
                  }




              ?>
            <!-- insert PHP above -->
        </p>


        <img src="FB-f-Logo__blue_100.png" id="fbShare" class="socialShare" />

        <p class="text-center"><a href="https://chrisbolor.com">Share on Facebook!</a></p>



    </section><!-- closes #mainSection -->


<footer class="row">
    <p class="disclaimer center align-middle col-sm-9">
        This website is a project of <a href="www.chrisbolor.com" target="_blank">Chris Bolor</a>. There sadly is no book launch coming. Any similarities to real people, books, etc, are purely coincidence. Enjoy!
    </p>
    <p class="col-sm-9" id="copyright">&copy; 2017 Chris Bolor | <a href="www.chrisbolor.com" target="_blank">www.ChrisBolor.com</a>
    </p>
</footer>





<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script type='text/javascript' src="scripts.js"></script>

</main><!-- closes #mainWrapper -->
</body>
</html>
