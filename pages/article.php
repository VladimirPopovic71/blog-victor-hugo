 <!-- Article --> 
<div class="container">    
    <div class="row mt-5">

        <?php            
            
            if (isset($_GET['id']) && is_numeric($_GET['id']))
            {            
                $id = $_GET['id'];    
            } else {
                header("Location: http://localhost/articles");
            }            
         
            $stm = $pdo->query("SELECT * FROM `articles` WHERE `article_id` = $id");
            $article = $stm->fetch();
        ?>
        <h2><span style="color: sienna;">Title: </span><?php echo ($article['title']); ?></h2>
       
    </div>
    <div class="row">
        <div class="col-3 mt-4">
            <img src="<?php echo ($article['image']); ?>" alt="">
        </div>
        <div class="col-9 mt-4">
            <h6><span style="color: sienna;">Content: </span></h6>
            <p><?php echo ($article['content']); ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-3 mt-4">
            <h6><span style="color: sienna;">Auteur: </span><?php echo ($article['user_id']); ?></h6>
            <h6><span style="color: sienna;">Créé de: </span><?php echo date('d.m.Y',strtotime($article['created_at'])); ?></h6>
        </div>
        <div class="col-9 mt-4">
            <h6><span style="color: sienna;">Source: </span></h6>
            <p><?php echo ($article['hook']); ?></p>
        </div>
    </div>
</div>

<hr>

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


<?php 
    $stm = $pdo->query("SELECT * FROM articles ORDER BY article_id DESC");
    $articles = $stm->fetchAll();
?>

<div class="container-fluid bgMarron">
    <div class="container">
        <div class="row mt-5">
            <?php 
                $i=1;
                foreach($articles as $article)
                {             
                    if ($i>3) { break; }
            ?>

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

            <?php 
                    $i=$i+1;                    
                } 
            ?>  

        </div>
    </div>
</div>