    <?php if ($uri != "/login") { ?>
        <div class="container-fluid my-0 py-4" style="background-color: #856a47; color: #fff;">
            <div class="container">
                <div class="row d-flex flex-row justify-content-between align-items-start">       

                    <div class="col-3">
                        <h5 class="my-3">Victor Hugo</h5>
                        <p>Écouter est un poète, dramaturge, écrivain, romancier et dessinateur romantique français, né le 7 ventôse an X (26 février 1802) à Besançon2,3 et mort le 22 mai 1885 à Paris.</p>
                    </div>                    
                    <div class="col-3">
                        <h5 class="my-3">Réseaux sociaux</h5>
                        <ul style="list-style-type: square;">
                            <li><a href="/" style="text-decoration: none; color:#fff;">Facebook</a></li>    
                            <li><a href="/" style="text-decoration: none; color:#fff;">Twitter</a></li>    
                            <li><a href="/" style="text-decoration: none; color:#fff;">Linkedin</a></li>    
                            <li><a href="/" style="text-decoration: none; color:#fff;">YouTube</a></li>    
                        </ul>
                    </div>
                    <div class="col-3">
                        <h5 class="my-3">Administration</h5>
                        <ul style="list-style-type: square;">

                            <?php 
                                if(isset($_SESSION['connecte'])){ 
                                    if($_SESSION['connecte']===1){ ?>
                                        <li><a href="/logout" style="text-decoration: none; color:#fff;">Logout</a></li>    
                                    <?php } else { ?>
                                        <li><a href="/login" style="text-decoration: none; color:#fff;">Login</a></li>                    
                                        <li><a href="/registration" style="text-decoration: none; color:#fff;">Registration</a></li>                            
                                    <?php } 
                                } else { ?>
                                        <li><a href="/login" style="text-decoration: none; color:#fff;">Login</a></li>                    
                                        <li><a href="/registration" style="text-decoration: none; color:#fff;">Registration</a></li>                            
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h5 class="my-3">Newsletter</h5>
                        Si vous souhaitez recevoir ma newsletter, veuillez saisir votre adresse e-mail
                        <br><br>
                        <form class="form-inline">
                            <div class="form-group mb-2">
                                <label for="emailf" class="sr-only">Email</label>
                                <input type="text" readonly class="form-control-plaintext bg-light p-1" id="emailf" value="email@example.com">
                            </div>  
                            <button type="submit" class="btn btn-secondary mb-2">Ajouter</button>
                        </form>
                    </div>                
                </div>
            </div>
        </div>
    <?php } ?>
    <footer class="site-footer bg-dark border-bottom border-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-white d-flex flex-row justify-content-center align-items-center py-2">
                    <small>Copyright © 2020 <strong>Vladimir Popovic</strong> Tous droits réservés </small>
                </div>            
            </div>     
        </div>        
    </footer>	
    <!--end bottom footer--> 
    <a class="btn-scroll-top show" href="#top" data-scroll=""><i class="fas fa-angle-up"></i></a>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
    <!-- <script src="./jquery.js"></script> -->
    <?php             
        if ($uri=="/admin") {     
            include('js/admin.js.php');
        }
    ?>
  </body>
</html>