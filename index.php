<!doctype html>
<?php $page = 'home';?>
<?php include 'head.php';?>
<body>
<!-- HEADER-->
<?php include 'header.php';?>
<!-- /HEADER-->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/slide1.jpg" alt="slide">
      <div class="carousel-caption">
          <h3>Get complete Car Care</h3>
          <p></p>
      </div>
    </div>
    <div class="item">
      <img src="img/slide2.jpg" alt="slide">
      <div class="carousel-caption">
          <h3>Trust your car to experienced auto experts</h3>
          <p></p>
      </div>
    </div>
    <div class="item">
      <img src="img/slide3.jpg" alt="slide">
      <div class="carousel-caption">
            <h3>Best Quality Car Repair & Customer Service in the Area</h3>
            <p></p>
      </div>
    </div>
    <div class="item">
      <img src="img/slide4.jpg" alt="slide">
      <div class="carousel-caption">
          <h3>Your insurance work is accepted</h3>
          <p></p>
      </div>
    </div>        
    
    <div class="item">
      <img src="img/slide5.jpg" alt="slide">
      <div class="carousel-caption">
          <h3>Auto body repair for all major makes and models</h3>
          <p></p>
      </div>
    </div>   

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


   <!-- BANNERS -->
    <div class="container">
      <div class="row banners">
          <div class="col-md-4">
            <div class="bn-hours">
              <div>
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <h2>Working Hours</h2>
              </div>
              <ul>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-xs-4 col-sm-4">
                      Monday
                    </div>
                    <div class="col-md-6 col-xs-8 col-sm-8">
                      7:00 AM - 6:00 PM
                    </div>
                  </div> 
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-xs-4 col-sm-4">
                      Tuesday
                    </div>
                    <div class="col-md-6 col-xs-8 col-sm-8">
                      7:00 AM - 6:00 PM
                    </div>
                  </div> 
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-xs-4 col-sm-4">
                      Wednesday
                    </div>
                    <div class="col-md-6 col-xs-8 col-sm-8">
                      7:00 AM - 6:00 PM
                    </div>
                  </div> 
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-xs-4 col-sm-4">
                      Thursday
                    </div>
                    <div class="col-md-6 col-xs-8 col-sm-8">
                      7:00 AM - 6:00 PM
                    </div>
                  </div> 
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-xs-4 col-sm-4">
                      Friday
                    </div>
                    <div class="col-md-6 col-xs-8 col-sm-8">
                      7:00 AM - 6:00 PM
                    </div>
                  </div> 
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-xs-4 col-sm-4">
                      Saturday
                    </div>
                    <div class="col-md-6 col-xs-8 col-sm-8">
                      7:00 AM - 6:00 PM
                    </div>
                  </div> 
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-4 col-xs-4 col-sm-4">
                      Sunday
                    </div>
                    <div class="col-md-6 col-xs-8 col-sm-8">
                      Closed
                    </div>
                  </div> 
                </li>
              </ul>
            </div>
          </div>
        <div class="col-md-4">
          <div class="bn-location">
            <div>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <h2>Location</h2>
              <!-- <img src="img/map.png" class="img-responsive" alt="Map"> -->
              <!-- MAPA -->
              <div class="overlay-map" onclick="style.pointerEvents='none'"></div>
              <iframe
                width="100%"
                height="200"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCrzdOBlPuoXf2QYOLYjscjMEzi6XE05LY
                  &q=41.035596, -73.756744" allowfullscreen>
              </iframe>
              <!-- MAPA -->              
            </div>

          </div>
       </div>
        <div class="col-md-4">
          <div class="bn-contact">
            <div>
              <i class="fa fa-comment" aria-hidden="true"></i>
              <h2>Contact</h2>
              <h3>112 Oakley Ave, White Plains <br> NY 10601</h3>
              <p class="borde"></p> 
              <p class="number">
                (914) - 946-1707<br>(914) - 882-3153
              </p>
              <p class="borde"></p> 
              <p class="email">contac@totalcareautorepair.com</p>
            </div>
          </div>
        </div>
      </div>
      </div> 
      <!-- /BANNERS -->

      <!-- SERVICIOS -->
      <div class="services serv-desktop">
        <h3>Our <span>Services</span></h3>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <ul>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Oil changes
                </li>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Tune Ups
                </li>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Engine Repair
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Engine Replacement
                </li>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Engine Performance
                </li>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Check Computer Diagnostic
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Air Conditioning
                </li>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Service & Repair
                </li>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Electrical System Diagnosis & Repair
                </li>
              </ul>
            </div>                    
          </div>
          <div class="div-btn">
            <a href="services.html" class="btn-total">View All Services</a>
          </div>
        </div>
      </div> 
      <!-- /SERVICIOS Desktop -->

   <!-- SERVICIOS Mobile -->
      <div class="services serv-mobile">
        <h3>Our <span>Services</span></h3>
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <ul>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Air Conditioning Service & Repair
                </li>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Electrical System Diagnosis & Repair
                </li>
                <li>
                  <i class="fa fa-check-circle" aria-hidden="true"></i>
                  Brake Repair
                </li>
              </ul>
            </div>
          </div>
          <div class="div-btn">
            <a href="services.html" class="btn-total">View All Services</a>
          </div>
        </div>
      </div> 
      <!-- /SERVICIOS -->

      <?php include 'testimonial.php';?>

      <!-- FOOTER-->
      <?php include 'footer.php';?>
      <!-- /FOOTER-->
    </body>
</html>
