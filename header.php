<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->

  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
      <a href="index.php">Home</a>
      <a href="services.php">Services</a>
      <a href="about.php">About Us</a>
      <a href="contact.php">Contact</a>
    </div>
  </div>

    <div class="log-mobile">
      <a href="/">
        <img src="img/logo.png" alt="Logo" class="img-responsive" width="150px">
      </a>
    </div>

    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 box-horario">
              <p>Monday-Saturday 7:00AM - 6:00PM</p>
          </div>
          <div class="col-md-4 box-hablamos">
              <p>¡Hablamos Español!</p>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4 col-md-offset-4 dir">
              <p>112 Oakley Ave, White Plains, NY 10601</p>
          </div>
          <div class="col-md-4 tel">
              <p>(914) 946-1707 -  (914)-882-3153 </p>
          </div>
        </div>        
      </div>
    </header>
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button onclick="openNav()" type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-logo" href="index.php">
            <img src="img/logo.png" alt="Logo">
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <a class="navbar-brand <?php echo $page=='home'? 'active' : '' ?>" href="index.php">Home</a>
          <a class="navbar-brand <?php echo $page=='services'? 'active' : '' ?>" href="services.php">Services</a>
          <a class="navbar-brand <?php echo $page=='about'? 'active' : '' ?>" href="about.php">About Us</a>
          <a class="navbar-brand <?php echo $page=='contact'? 'active' : '' ?>" href="contact.php">Contact</a>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="https://www.facebook.com/totalcareservicestation/?fref=ts#" target="_blank">
                <img src="img/fb.png" alt="Facebook">
              </a>
            </li>          
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>