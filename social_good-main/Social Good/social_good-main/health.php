<?php require('server.php')?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .accordion > input[type="checkbox"] {
  position: absolute;
  left: -100vw;
}

.accordion .content {
  overflow-y: hidden;
  height: 0;
  transition: height 0.3s ease;
}

.accordion > input[type="checkbox"]:checked ~ .content {
  height: auto;
  overflow: visible;
}

.accordion label {
  display: block;
}

.accordion {
  margin-bottom: 1em;
}

.accordion > input[type="checkbox"]:checked ~ .content {
  padding: 15px;
  border: 1px solid #e8e8e8;
  border-top: 0;
}

.accordion .handle {
  margin: 0;
  font-size: 1.125em;
  line-height: 1.2em;
}

.accordion label {
  color: #333;
  cursor: pointer;
  font-weight: normal;
  padding: 15px;
  background: #e8e8e8;
}

.accordion label:hover,
.accordion label:focus {
  background: #d8d8d8;
}

.accordion .handle label:before {
  font-family: 'fontawesome';
  content: "\f054";
  display: inline-block;
  margin-right: 10px;
  font-size: .58em;
  line-height: 1.556em;
  vertical-align: middle;
}

.accordion > input[type="checkbox"]:checked ~ .handle label:before {
  content: "\f078";
}


/*
 Demo purposes only
*/
*,
*:before,
*:after {
  box-sizing: border-box;
}

body {
  padding: 40px;
}

p {
  margin: 0 0 1em;
}

h1 {
  margin: 0 0 1.5em;
  font-weight: 600;
  font-size: 1.5em;
}

.accordion {
  max-width: 65em;
}

.accordion p:last-child {
  margin-bottom: 0;
}
    </style>
    </head>
    <body style="background-color: #4158D0;
    background-image: linear-gradient(71deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
      color: white;">
      <div class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                </button>
      <a href="home.php" style="color:#e8270b; margin-bottom: 0; font-family: 'Dancing Script', cursive; text-decoration:none;"><h2>She_Can</h2></a>
      </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                    </li>
                    <li>
                        <a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Login</a>
                    </li>
                    <li>
                        <a href="learn.php"><span class="glyphicon glyphicon-tasks"></span>  Learn</a>
                    </li>
                    <li>
                        <a href="shop.php"><span class="glyphicon glyphicon-phone"></span> Shop</a>
                    </li>
                    <li>
                        <a href="sell.php"><span class="glyphicon glyphicon-phone"></span> Sell</a>
                    </li>
                </ul>
            </div>
        </div>
</div>
<div class="row" style="margin-top: 30px;">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <img src="./images/period.png" style="margin-top: 63px;">
     </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
<h1>Tips to Maintain Menstrual Hygiene</h1>
      <section class="accordion">
        <input type="checkbox" name="collapse" id="handle1" checked="checked">
        <h2 class="handle">
          <label for="handle1">Change your pad every four hours</label>
        </h2>
        <div class="content">
          <p>If you use sanitary pads to soak the flow during your periods, remember to change it often. Ideally, changing it every four hours is good. If not every day, do this on the first two days when the flow is heavier. On others too, do not wear the same pad for more than eight hours.</p>
        </div>
      </section>
      <section class="accordion">
        <input type="checkbox" name="collapse2" id="handle2">
        <h2 class="handle">
          <label for="handle2">Clean reusable pads properly</label>
        </h2>
        <div class="content">
          <p>There are sanitary napkins that can be reused for several menstrual cycles. If you use one of these, ensure that you clean them thoroughly after every use so that there are no germs and there is no scope of infection. Follow the instructions given and do not reuse them after the said number of uses.</p>
        </div>
      </section>
      <section class="accordion">
        <input type="checkbox" name="collapse2" id="handle3">
        <h2 class="handle">
          <label for="handle3">Keep your vaginal area clean</label>
        </h2>
        <div class="content">
          <p>It is important to keep your vaginal area clean especially during periods when there is blood flow from the body. Use warm water and diluted soap to wash the area. You can also use recommended vaginal washes available in the market to keep yourself clean. If, however, they irritate your skin or vagina, discontinue the use and speak to a doctor. </p>
        </div>
      </section>
      <section class="accordion">
        <input type="checkbox" name="collapse2" id="handle4">
        <h2 class="handle">
          <label for="handle4">Never use two pads simultaneously</label>
        </h2>
        <div class="content">
          <p>No, two is not better than one. Some women who experience heavy flow, tend to use two sanitary pads at one go to control the flow and prevent staining of clothes. This, however, is a bad idea as it can cause infections in the vaginal region. Stick to one and keep changing it often if the flow is more.</p>
        </div>
      </section>
      <section class="accordion">
        <input type="checkbox" name="collapse2" id="handle5">
        <h2 class="handle">
          <label for="handle5">Wear comfortable, clean underwear</label>
        </h2>
        <div class="content">
          <p>While changing your sanitary pad is essential, it is also important to wear something comfortable during these days. Tight thongs or underwear made of fabric that doesn’t allow your skin to breathe will also lead to infections. Stick to clean and comfortable cotton knickers that do not stick to your skin.</p>
        </div>
      </section>
      </div>
      </div>
      <div class="row" style="margin-top: 30px;">
          <div class="col-md-6 col-sm-6 col-xs-12">
      <h1>Breast Self Exam | Breast Cancer Awareness</h1>
            <section class="accordion">
              <input type="checkbox" name="collapse" id="handle6" checked="checked">
              <h2 class="handle">
                <label for="handle6">In the Shower</label>
              </h2>
              <div class="content">
                <p>With the pads/flats of your 3 middle fingers, check the entire breast and armpit area pressing down with light, medium, and firm pressure. Check both breasts each month feeling for any lump, thickening, hardened knot, or any other breast changes.</p>
              </div>
            </section>
            <section class="accordion">
              <input type="checkbox" name="collapse2" id="handle7">
              <h2 class="handle">
                <label for="handle7">In Front of a Mirror</label>
              </h2>
              <div class="content">
                <p>Look for any changes in the contour, any swelling, or dimpling of the skin, or changes in the nipples. Next, rest your palms on your hips and press firmly to flex your chest muscles. Left and right breasts will not exactly match—few women breasts do, so look for any dimpling, puckering, or changes, particularly on one side.</p>
              </div>
            </section>
            <section class="accordion">
              <input type="checkbox" name="collapse2" id="handle8">
              <h2 class="handle">
                <label for="handle8">Lying Down</label>
              </h2>
              <div class="content">
                <p>Place a pillow under your right shoulder and your right arm behind your head. Using your left hand, move the pads of your fingers around your right breast gently covering the entire breast area and armpit.Use light, medium, and firm pressure. Squeeze the nipple; check for discharge and lumps.</p>
              </div>
            </section>
            <section class="accordion">
              <input type="checkbox" name="collapse2" id="handle9">
              <h2 class="handle">
                <label for="handle9">Any Nipple Discharge Particularly Clear Discharge Or Bloody Discharge</label>
              </h2>
              <div class="content">
                <p>It is also important to note that a milky discharge that is present when a woman is not breastfeeding should be checked by her doctor, although it is not linked with breast cancer.Let your doctor know about any nipple discharge, clear, bloody or milky. The most concerning discharges are bloody or clear.
                </p>
              </div>
            </section>
            <section class="accordion">
              <input type="checkbox" name="collapse2" id="handle10">
              <h2 class="handle">
                <label for="handle10">An Assessment of Any Suspicious Area</label>
              </h2>
              <div class="content">
                <p>It may be helpful to know that lumps that appear soft, smooth, round, and movable are likely to be either benign tumors or cysts. A lump that is hard and oddly-shaped and feels firmly attached within the breast is more likely to be cancer, but further tests are needed to diagnose the problem.</p>
              </div>
            </section>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <img src="./images/breast.jpg" style="margin-top: 63px;">
               </div>
               <div class="container text-center" style="margin-bottom: 20px;">
                <h5><mark><b>Any Issue?</b><a href="video.html" style="text-decoration:none;">Video call a doctor</a></mark></h5>
            </div>
               </div>
    </body>
    <?php require('footer.php')?>
    </html>