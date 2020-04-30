<!-- Portfolio -->
<div class="container">
    <div class="row">
        <div class="col d-flex flex-row justify-content-center align-items-center mt-5 mb-3">
            <h3>PORTFOLIO</h3>
        </div>                
    </div>   
    <div class="row d-flex flex-row justify-content-center align-items-center bgMarron">
 
        <form class="form-inline pt-2">
            <div class="form-group mb-2 mr-2">                                        
                <input type="text" class="form-control" id="po_name" name="po_name" placeholder="Nom de project">
            </div>
            <div class="form-group mb-2 mr-2">                                        
                <input type="text" class="form-control" id="po_from" name="po_from" placeholder="de (date)">
            </div>                
            <div class="form-group mb-2 mr-2">                                        
                <input type="text" class="form-control" id="po_to" name="po_to" placeholder="a (date)">
            </div>                
            <div class="form-group mb-2 mr-2"> 
                <select id="po_category" name="po_category" class="form-control" placeholder="category">                    
                    <?php 
                        $stm = $pdo->query("SELECT * FROM categories ORDER BY name ASC");
                        $categories = $stm->fetchAll();
                        foreach($categories as $category){ ?>
                            <option value="<?php echo $category['category_id']; ?>"><?php echo $category['name']; ?></option>
                        <?php }
                    ?>                      
                </select>                                                           
            </div>    
            <div class="form-group mb-2 mr-2">                                        
                <input type="text" class="form-control" id="po_client" name="po_client" placeholder="Client">
            </div>                          
            <button type="submit" class="btn btn-light mb-2">Rechercher</button>
        </form>

    </div> 
</div>

<?php 
    $stm = $pdo->query("SELECT * FROM projects ORDER BY project_id DESC");
    $projects = $stm->fetchAll();
?>

<div class="container-fluid bgMarron">
    <div class="container">
        <div class="row my-5">
            <?php foreach($projects as $project){ ?>

                <div class="col-4 my-5">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo ($project['image']); ?>" class="card-img-top inner" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ($project['name']); ?></h5>
                            <p class="card-text"><?php echo substr($project['description'],0,85); ?> ...</p>
                            <a href="<?php echo ($project['link']); ?>" target="_blank" class="btn btn-primary">Wikipedia</a>
                        </div>
                    </div>
                </div>            

            <?php } ?>            
        </div>
    </div>
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