 <!-- Article -->
 <div class="article" id="contact">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-row justify-content-center align-items-center mt-5 mb-3">
                <h3>ARTICLES</h3>
            </div>                
        </div>
        
        <div class="row d-flex flex-row justify-content-center align-items-center bgMarron">
            
            <form class="form-inline pt-2">
                <div class="form-group mb-2 mr-2">                                        
                    <input type="text" class="form-control" id="ar_title" name="ar_title" placeholder="Title">
                </div>
                <div class="form-group mb-2 mr-2">                                        
                    <input type="text" class="form-control" id="ar_hook" name="ar_hook" placeholder="Hook">
                </div>                          
                <div class="form-group mb-2 mr-2">                                        
                    <input type="text" class="form-control" id="ar_from" name="ar_from" placeholder="de (date)">
                </div>                
                <div class="form-group mb-2 mr-2">                                        
                    <input type="text" class="form-control" id="ar_to" name="ar_to" placeholder="a (date)">
                </div>                                 
                
                <div class="form-group mb-2 mr-2"> 
                    <select id="ar_user" name="ar_user" class="form-control">                    
                        <?php                         
                            $stm = $pdo->query("SELECT * FROM user ORDER BY name ASC");
                            $users = $stm->fetchAll();
                            foreach($users as $user){ ?>
                                <option value="<?php echo $user['category_id']; ?>"><?php echo $user['name']; ?></option>
                            <?php }                        
                        ?>                      
                    </select>                                                           
                </div>                    
                
                <button type="submit" class="btn btn-light mb-2">Rechercher</button>
            </form>

        </div>        
    </div>
 </div>

<?php 
    $stm = $pdo->query("SELECT * FROM articles ORDER BY article_id DESC");
    $articles = $stm->fetchAll();
?>

<div class="container-fluid bgMarron">
    <div class="container">
        <div class="row mt-5">
            <?php foreach($articles as $article){ ?>

                <div class="col-4 my-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo ($article['image']); ?>" class="card-img-top inner" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ($article['title']); ?></h5>
                            <p class="card-text"><?php echo substr($article['content'],0,85); ?> ...</p>
                            <a href="<?php echo ("http://localhost/article?id=" . $article['article_id']); ?>" class="btn btn-primary">Voir plus...</a>
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