   <!-- Main navigation -->
   <header class="site-header bg-dark border-bottom border-dark">
      <a href="#content" class="sr-only sr-only-focusable">Skip to content</a>
      <div class="container">
          <!-- Navbar -->
          <nav class="navbar main-nav navbar-expand-lg navbar-dark" aria-label="Main navigation">
              <a href="index.php" class="navbar-brand d-inline-flex text-uppercase"><img src="img/logo.png" height="30" class="d-inline-block align-top" alt="Logo │ Victor Hugo"> Victor Hugo</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse text-uppercase" id="navbarContent">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a href="http://localhost/home" class="nav-link">Accueil</a>
                      </li>
                      <li class="nav-item">
                          <a href="http://localhost/portfolio" class="nav-link">Portfolio</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/skills" class="nav-link">Compétences</a>
                    </li>
                      <li class="nav-item">
                          <a href="http://localhost/articles" class="nav-link">Articles</a>
                      </li>
                      <li class="nav-item">
                          <a href="http://localhost/contact" class="nav-link">Contact</a>
                      </li>
                      <?php 
                        if(isset($_SESSION['connecte'])){ 
                            if ($_SESSION['connecte'] === 1){                                                        
                                if ($_SESSION['status'] === 'A'){
                                ?>
                                    <li class="nav-item">
                                        <a href="http://localhost/admin" class="nav-link"> │ Administrateur</a>
                                    </li>
                                <?php
                                } elseif ($_SESSION['status'] === 'U'){
                                    ?>
                                    <li class="nav-item">
                                        <a href="http://localhost/dashboard" class="nav-link"> │ Dashboard</a>
                                    </li>
                                    <?php    
                                }
                            }                  
                        }
                      ?>
                  </ul>
              </div>
          </nav>
      </div>
    </header>
    <!-- end main navigation -->