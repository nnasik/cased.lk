<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">CASED</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <?php
          $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          $page = explode(".",explode("/", $actual_link)[3])[0];
          ?>
          <li><a <?php echo ($page=='index' || $page=='' ? 'class="active"' : '');?> href="index.php">Home</a></li>
          <li><a <?php echo ($page=='about' ? 'class="active"' : '');?> href="about.php">About</a></li>
          <li><a <?php echo ($page=='courses' ? 'class="active"' : '');?> href="courses.php">Courses</a></li>
          <li><a <?php echo ($page=='trainers' ? 'class="active"' : '');?> href="trainers.php">Trainers</a></li>
          <li><a <?php echo ($page=='contact' ? 'class="active"' : '');?>href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>