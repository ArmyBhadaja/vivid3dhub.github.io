<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Career</title>
        <link rel="stylesheet" href="main.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                crossorigin="anonymous">
</head>
<body>

<?php
include ("carrer1.php");
?>

        

        <div class="navbar" style="background-color: rgb(118, 114, 114);">
        <a href="index.html" class="logo" style="padding-left: 33px;"><span>VIVID3D</span>HUB</a>
                <ul>
                        <li><a href="about.html">ABOUT US</a></li>
                        <li><a href="services.html">360VIEW</a></li>
                        <li><a href="portfolio.html">PORTFOLIO</a></li>
                        <li><a href="career.php">CAREER</a></li>
                        <li><a href="contact.html">CONTACT US</a></li>
                </ul>
        </div>
<div class="main">
        <div class="carrer">
                <section>
                        <div>
                                <div class="row">
                                        <div class="col-sm-12">
                                                <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                                <div>
                                                                        <h2 style="margin-bottom: 2rem;">JOIN OUR TEAM</h2>
                                                                </div>


<?php
        if($insert == true){
        echo "<p class='submitMSG' style='color:green;' 'font-size:200px'><b>Thanks for submitting your form.</b></p>";
        }
        ?>

                                                                <form method="post" data-form-title="CONTACT US">
                                                                        <input type="hidden" data-form-email="true">
                                                                        <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                        name="name" required=""
                                                                                        placeholder="Name*"
                                                                                        data-form-field="Name">
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="email" class="form-control"
                                                                                        name="email" required=""
                                                                                        placeholder="Email*"
                                                                                        data-form-field="Email">
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <input type="phone" class="form-control"
                                                                                        name="phone" required=""
                                                                                         placeholder="Contact number*"
                                                                                        data-form-field="Phone">
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <textarea class="form-control"
                                                                                        name="msg"
                                                                                        placeholder="Message" rows="7"
                                                                                        data-form-field="Message"></textarea>
                                                                        </div>
                                                                        <div>
                                                                                <button type="submit"
                                                                                        class="btn btn-lg btn-secondary">APPLY NOW</button>
                                                                        </div>
                                                                </form>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </section>
        </div>
</div>
<footer id=foot1>
        <a href="https://www.facebook.com" target="_blank">
                <i class="fa fa-facebook"></i>
        </a>
        <a href="https://www.twitter.com" target="_blank">
                <i class="fa fa-twitter"></i>
        </a>
        <a href="https://instagram.com/vivid3dhub?igshid=YmMyMTA2M2Y=" target="_blank">
                <i class="fa fa-instagram"></i>
        </a>
        <a href="https://youtube.com/channel/UCFbt-C9z67mEr506lYAP-rQ" target ="_blank">
                <i class="fa fa-youtube"></i>
        </a>
        <a href="https://www.linkedin.com/in/mukund-bhut-59aa16185" target="_blank">
                <i class="fa fa-linkedin"></i>
        </a>


</footer>
</body>
</html>