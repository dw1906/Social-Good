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
    <body style="  height: 100px;
    background-color: red;
    background-image:
      radial-gradient(
        yellow,
        #f06d06
      );  
      color: white;">
      <?php include('header.php') ?>  
<div class="row" style="margin-top: 50px;">
  <div class="col-md-6 col-sm-6 col-xs-12">
    <iframe width="420" height="345" src="https://www.youtube.com/embed/I85EEG8A7BM?controls=0">
    </iframe>
     </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
<h1>Learn Knitting By following Steps or watch video:</h1>
      <section class="accordion">
        <input type="checkbox" name="collapse" id="handle1" checked="checked">
        <h2 class="handle">
          <label for="handle1">CAST ON</label>
        </h2>
        <div class="content">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos quas perferendis dolorum incidunt modi veniam consequatur rem. Illo, nisi! Ipsa sequi officiis autem magnam earum laudantium voluptas. Voluptatibus, error omnis.</p>
        </div>
      </section>
      <section class="accordion">
        <input type="checkbox" name="collapse2" id="handle2">
        <h2 class="handle">
          <label for="handle2">First Knit Row</label>
        </h2>
        <div class="content">
          <p>There are sanitary napkins that can be reused for several menstrual cycles. If you use one of these, ensure that you clean them thoroughly after every use so that there are no germs and there is no scope of infection. Follow the instructions given and do not reuse them after the said number of uses.</p>
        </div>
      </section>
      <section class="accordion">
        <input type="checkbox" name="collapse2" id="handle3">
        <h2 class="handle">
          <label for="handle3">Binding Off</label>
        </h2>
        <div class="content">
          <p>It is important to keep your vaginal area clean especially during periods when there is blood flow from the body. Use warm water and diluted soap to wash the area. You can also use recommended vaginal washes available in the market to keep yourself clean. If, however, they irritate your skin or vagina, discontinue the use and speak to a doctor. </p>
        </div>
      </section>
        <h5><mark><b>Wanna sell what you've made?</b><a href="sell.php" style="text-decoration:none;">Click Here To Earn</a></mark></h5>
      </div>
      </div>
      <?php require('footer.php')?>
    </body>
    </html>