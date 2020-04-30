<div class="container">
    <div class="row">
        <div class="col d-flex flex-row justify-content-center align-items-center mt-5 mb-3">
            <h3>A propos</h3>
        </div>                
    </div>
    <div class="row">
        <div class="col">            
            <p>Victor Hugo - Écouter est un poète, dramaturge, écrivain, romancier et dessinateur romantique français, né le 7 ventôse an X (26 février 1802) à Besançon2,3 et mort le 22 mai 1885 à Paris. Il est considéré comme l'un des plus importants écrivains de langue française. Il est aussi une personnalité politique et un intellectuel engagé qui a eu un rôle idéologique majeur et occupe une place marquante dans l'histoire des lettres françaises au xixe siècle, dans des genres et des domaines d’une remarquable variété4,5.
                <br><br>
                Au théâtre, Victor Hugo se manifeste comme un des chefs de file du romantisme français lorsqu'il expose sa théorie du drame romantique dans les préfaces qui introduisent Cromwell en 18276, puis Hernani en 1830 qui sont de véritables manifestes, puis par ses autres œuvres dramatiques : Ruy Blas en 1838, mais aussi Lucrèce Borgia et Le Roi s'amuse.
                <br><br>
                Victor Hugo est aussi un poète lyrique avec des recueils comme Odes et Ballades (1826), Les Feuilles d'automne (1831) ou Les Contemplations (1856), mais il est aussi poète engagé contre Napoléon III dans Les Châtiments (1853) ou encore poète épique avec La Légende des siècles (1859 et 1877).
                <br><br>
                Ses romans rencontrent également un grand succès populaire, avec notamment Notre-Dame de Paris (1831), et plus encore avec Les Misérables (1862).
                <br><br>
                Son œuvre multiple comprend aussi des discours politiques à la Chambre des pairs, à l'Assemblée constituante et à l'Assemblée législative, notamment sur la peine de mort, l’école ou l’Europe, des récits de voyages (Le Rhin, 1842, ou Choses vues, posthumes, 1887 et 1890), une correspondance abondante, ainsi que de nombreux croquis et dessins à la plume et au lavis.
                <br><br>
                Victor Hugo a fortement contribué au renouvellement de la poésie et du théâtre. Il a été admiré par ses contemporains et l’est encore, mais il a aussi été contesté par certains auteurs modernes7. Il a permis à de nombreuses générations de développer une réflexion sur l’engagement de l’écrivain dans la vie politique et sociale grâce à ses multiples prises de position, choisissant de s'exiler pour vivre à Guernesey pendant les vingt ans du Second Empire.
                <br><br>
                Ses choix, à la fois moraux et politiques8, durant la deuxième partie de sa vie, et son œuvre hors du commun ont fait de lui un personnage emblématique, que la Troisième République a honoré par des funérailles nationales, qui ont accompagné le transfert de sa dépouille au Panthéon de Paris le 1er juin 1885, dix jours après sa mort.                        
            </p>
        </div>                
    </div>
</div>

<?php 
    $stm = $pdo->query("SELECT * FROM projects ORDER BY project_id DESC");
    $projects = $stm->fetchAll();
?>

<div class="container-fluid bgMarron">
    <div class="container">
        <div class="row my-5">          

            <?php 
                $i= 1;
                foreach($projects as $project){ 
                    if ($i>3) { break; }
            ?>

                <div class="col-4 my-5">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo ($project['image']); ?>" class="card-img-top inner" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ($project['name']); ?></h5>
                            <p class="card-text"><?php echo substr($project['description'],0,85); ?> ...</p>
                            <hr>
                            <p>
                                Cree: <strong><?php echo ($project['client']); ?></strong><br>
                                de <strong><?php echo date('d.m.Y',strtotime($project['from'])); ?></strong> à <strong><?php echo date('d.m.Y',strtotime($project['to'])); ?></strong><br>
                                Compéntence: <strong><?php echo ($project['skills_id']); ?></strong>
                            </p>
                            <a href="<?php echo ($project['link']); ?>" target="_blank" class="btn btn-primary">Wikipedia</a>
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

<?php 
    $stm = $pdo->query("SELECT * FROM skills ORDER BY skills_id ASC");
    $skills = $stm->fetchAll();
?> 

<div class="container-fluid d-flex flex-row justify-content-center align-items-center flex-wrap">

    <?php 
        $i=1;
        foreach($skills as $skill)
        {             
            if ($i>2) { break; }
    ?>
    
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
                
    <?php 
            $i=$i+1;                    
        } 
    ?>  
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