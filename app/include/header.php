  <header>
    <div class="top-bar-menu clear-fix">
        <div class="contact">
          <ul>
            <li class="bold">
            <i class="fas fa-phone-alt"></i>&nbsp;
            +256 (0) 754 182852
            </li>
            <li class="bold">
            <i class="fas fa-phone-alt"></i>&nbsp;
            +256 (0) 754 182852
            </li>
            <li class="bold">
            <i class="fa fa-fax"></i>&nbsp;
            +256 (0) 754 182852
            </li>
            <li>
            <i class="fa fa-map-marker-alt"></i>&nbsp;
            <a href="">Innovations House Plotg 7B Acacia/Babiha Avenue, Kampala</a>
          </li>
          </ul>
        </div>

        <div class="social-media">
           <ul>
            <li>
              <a href="">
                <i class="fab fa-facebook"></i>
              </a>  
            </li>
            <li>
              <a href=""><i class="fab fa-twitter"></i></a>
            </li>
          </ul>
        </div>
    </div>

  <div class="main-bar-menu">

    <nav>
       <div class="nav-menu flex-row">
           <div class="nav-brand" style="">
               <img src="assets/images/kosha.png">
           </div>
           <div class="toggle-collapse">
               <div class="toggle-icons">
                   <i class="fas fa-bars"></i>
               </div>
           </div>   
           <div>
              <ul>
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       <a href="services.php">Services</a>
                   </li>
                   <li>
                       <a href="sectors.php">Sectors</a>
                   </li>
                   <li>
                       <a href="projects.php">Projects</a>
                   </li>
                   <li>
                       <a href="aboutus.php">About Us</a>
                   </li>

                   <?php if(isset($_SESSION['id'])): ?>

                   <li>
                      <i class="fa fa-user"></i>
                      <?php echo $_SESSION['username']; ?>
                      <i class="fa fa-chevron-down"></i>
                      <ul>
                        <li><a href="<?php echo(BASE_URL . "/admin/dashboard.php") ?>" class="logout">Dashbord</a></li>
                         <li><a href="<?php echo(BASE_URL . "/admin/logout.php") ?>" class="logout">Logout</a></li>
                      </ul>
                   </li>

                   <?php endif?>

               </ul>
           </div>
       </div>
   </nav>
    
  </div>
  
  </header>