<?php 
    if ($_SESSION['connecte'] != 1){
        header('Location: http://localhost/login');
        exit();
    }
    if ($_SESSION['status'] != 'U'){
        header('Location: http://localhost/login');
        exit();
    }
?>

<!-- Dashboard -->
<div class="container-fluid bgMarron">
<div class="container">
    <div class="row d-flex flex-row justify-content-center align-items-center">
        <div class="col-3 my-3">
            <h3>Dashboard</h3>
        </div>
        <div class="col-9 my-3">
        <button type="button" class="btn btn-light"> PROJECTS </button>
        <button type="button" class="btn btn-light"> COMPÉTENCE </button>
        <button type="button" class="btn btn-light"> ARTICLES </button>
        <button type="button" class="btn btn-light"> CATEGORIES </button>
        </div>                
    </div>
</div>
</div>
<br><br>
<div class="container">
    <!-- <div class="row">  -->

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    #1 │ Utilisateurs 
                    </button>
                </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">                        
                        <form action="/add_user.php" method="post">                        
                            <div class="form-group row">
                                <label for="f1_name" class="col-md-3 col-form-label text-right">Nom et Prenom</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f1_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f1_password" class="col-md-3 col-form-label text-right">Password</label>                                                
                                <div class="col-md-9">
                                    <input type="password" class="form-control" id="f1_password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f1_email" class="col-md-3 col-form-label text-right">Email</label>                                                
                                <div class="col-md-9">
                                    <input type="email" class="form-control" id="f1_email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f1_facebook" class="col-md-3 col-form-label text-right">Facebook</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f1_facebook">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f1_linkedin" class="col-md-3 col-form-label text-right">Linkedin</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f1_linkedin">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f1_twitter" class="col-md-3 col-form-label text-right">Twitter</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f1_twitter">
                                </div>
                            </div>
                            
                            <div class="form-group row">                                
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                <button type="submit" class="btn btn-primary " name="f1_submit">Submit</button>                                
                                </div>
                            </div>
                            
                        </form>                                               
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    #2 │ Projets
                    </button>
                </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        
                        <form action="/modCategories.php" method="post">                        
                            <div class="form-group row">
                                <label for="f2_name" class="col-md-3 col-form-label text-right">Project nom</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f2_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f2_from" class="col-md-3 col-form-label text-right">de</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f2_from">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f2_to" class="col-md-3 col-form-label text-right">à</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f2_to">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f2_description" class="col-md-3 col-form-label text-right">Description</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f2_description">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f2_client" class="col-md-3 col-form-label text-right">Client</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f2_client">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f2_link" class="col-md-3 col-form-label text-right">Link</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f2_link">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f2_image" class="col-md-3 col-form-label text-right">Image</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f2_image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f2_skills_id" class="col-md-3 col-form-label text-right">Compétences</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f2_skills_id">
                                </div>
                            </div>
                            <div class="form-group row">                                
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                <button type="submit" class="btn btn-primary " name="f2_submit">Submit</button>                                
                                </div>
                            </div>                            
                        </form> 

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    #3 │ Articles
                    </button>
                </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">

                        <form action="/modCategories.php" method="post">                        
                            <div class="form-group row">
                                <label for="f3_title" class="col-md-3 col-form-label text-right">Titlt</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f3_title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f3_hook" class="col-md-3 col-form-label text-right">Hook</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f3_hook">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f3_content" class="col-md-3 col-form-label text-right">Contenu</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f3_content">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f3_create_at" class="col-md-3 col-form-label text-right">Créé par</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f3_create_at">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f3_user_id" class="col-md-3 col-form-label text-right">Client</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f3_user_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f3_image" class="col-md-3 col-form-label text-right">Image</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f3_image">
                                </div>
                            </div>
                            <div class="form-group row">                                
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                <button type="submit" class="btn btn-primary " name="f3_submit">Submit</button>                                
                                </div>
                            </div>                            
                        </form>                                

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                    #4 │ Compétences
                    </button>
                </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                    
                        <form action="/modSkills.php" method="post">                        
                            <div class="form-group row">
                                <label for="f4_name" class="col-md-3 col-form-label text-right">Compétences nom</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f4_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f4_since" class="col-md-3 col-form-label text-right">De</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f4_since">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f4_image" class="col-md-3 col-form-label text-right">Image</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f4_image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="f4_description" class="col-md-3 col-form-label text-right">Description</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f4_description">
                                </div>
                            </div>                            
                            <div class="form-group row">
                                <label for="f4_category" class="col-md-3 col-form-label text-right">Category nom</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f4_category">
                                </div>
                            </div>                                                        
                            <div class="form-group row">                                
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                <button type="submit" class="btn btn-primary " name="f4_submit">Submit</button>                                
                                </div>
                            </div>                            
                        </form>  

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    #5 │ Catégories 
                    </button>
                </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">

                        <form action="/modCategories.php" method="post">                        
                            <div class="form-group row">
                                <label for="f5_name" class="col-md-3 col-form-label text-right">Category nom</label>                                                
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="f5_name">
                                </div>
                            </div>
                            <div class="form-group row">                                
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                <button type="submit" class="btn btn-primary " name="f5_submit">Submit</button>                                
                                </div>
                            </div>                            
                        </form>                                

                    </div>
                </div>
            </div>
        </div>
    <!-- </div>  -->
    <br><br>
   
</div>