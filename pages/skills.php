<!-- Skills -->
<div class="container">
    <div class="row">
        <div class="col d-flex flex-row justify-content-center align-items-center mt-5 mb-3">
            <h3>COMPÉTENCE</h3>
        </div>                
    </div>
    <div class="row d-flex flex-row justify-content-center align-items-center bgMarron">
 
        <form class="form-inline pt-2">
            <div class="form-group mb-2 mr-2">                                        
                <input type="text" class="form-control" id="sk_name" name="sk_name" placeholder="Nom de COMPÉTENCE">
            </div>
            <div class="form-group mb-2 mr-2">                                        
                <input type="text" class="form-control" id="sk_from" name="sk_from" placeholder="de (date)">
            </div>                
            <div class="form-group mb-2 mr-2">                                        
                <input type="text" class="form-control" id="sk_to" name="sk_to" placeholder="a (date)">
            </div>                
            <div class="form-group mb-2 mr-2"> 
                <select id="sk_category" name="sk_category" class="form-control">                    
                    <?php 
                        $stm = $pdo->query("SELECT * FROM categories ORDER BY name ASC");
                        $categories = $stm->fetchAll();
                        foreach($categories as $category){ ?>
                            <option value="<?php echo $category['category_id']; ?>"><?php echo $category['name']; ?></option>
                        <?php }
                    ?>                      
                </select>                                                           
            </div>                              
            <button type="submit" class="btn btn-light mb-2">Rechercher</button>
        </form>

    </div>     
</div>

<?php 
    $stm = $pdo->query("SELECT * FROM skills ORDER BY skills_id ASC");
    $skills = $stm->fetchAll();
?> 
<div class="container-fluid d-flex flex-row justify-content-center align-items-center flex-wrap bgMarron mt-5">

    <?php foreach($skills as $skill){ ?>
    
        <div class="card my-3 mx-3" style="max-width: 540px;">
            <div class="row">     
                <div class="col-md-4">
                    <img src="<?php echo ($skill['image']); ?>" class="card-img inner" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo ($skill['name']); ?></h5>
                    <p class="card-text"><?php echo substr($skill['description'],0,100); ?> ...</p>
                    <p class="card-text"><small class="text-muted">de <?php echo (date('d.m.Y',strtotime($skill['since']))); ?></small></p>
                </div>
                </div>
            </div>
        </div>        
    <?php } ?>

</div>

<div class="container my-3">
    <div class="row">
        <div class="col d-flex flex-row justify-content-start align-items-center">
            <h3>A propos</h3>
        </div>                
    </div>
    <div class="row">
        <div class="col">            
            <p>Victor Hugo - Écouter est un poète, dramaturge, écrivain, romancier et dessinateur romantique français, né le 7 ventôse an X (26 février 1802) à Besançon et mort le 22 mai 1885 à Paris. Il est considéré comme l'un des plus importants écrivains de langue française. Il est aussi une personnalité politique et un intellectuel engagé qui a eu un rôle idéologique majeur et occupe une place marquante dans l'histoire des lettres françaises au xixe siècle, dans des genres et des domaines d’une remarquable variété.</p>
        </div>                
    </div>
</div>