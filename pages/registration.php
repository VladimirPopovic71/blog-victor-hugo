<div class="container-fluid bgMarron text-center">
    <br>
    <div class="row d-flex flex-row justify-content-start align-items-start">
       <div class="col-3 my-4"><img src="../img/victor-hugo.jpg" alt="" width="150px"></div>
       <div class="col-9 text-left">
           <h2 class="text-center my-4">Registration</h2>    
           
            <form action="http://localhost/assets/addRegistration.php" method="post">                        
                <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-right">Nom et Prenom</label>                                                
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-3 col-form-label text-right">Password</label>                                                
                    <div class="col-md-6">
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-3 col-form-label text-right">Email</label>                                                
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="facebook" class="col-md-3 col-form-label text-right">Facebook</label>                                                
                    <div class="col-md-6">
                        <input type="text" name="facebook" class="form-control" id="facebook">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="linkedin" class="col-md-3 col-form-label text-right">Linkedin</label>                                                
                    <div class="col-md-6">
                        <input type="text" name="linkedin" class="form-control" id="linkedin">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="twitter" class="col-md-3 col-form-label text-right">Twitter</label>                                                
                    <div class="col-md-6">
                        <input type="text" name="twitter" class="form-control" id="twitter">
                    </div>
                </div>
                
                <div class="form-group row">                                
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <button type="submit" class="btn btn-primary " name="submit">S'inscrire</button>                                
                    </div>
                </div>
                
            </form>
           
        </div>
    </div>    
    <br><br><br>
    
</div>