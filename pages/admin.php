<?php   
    if ($_SESSION['connecte'] != 1){
        header('Location: http://localhost/login');
        exit();
    }
    if ($_SESSION['status'] != 'A'){
        header('Location: http://localhost/login');
        exit();
    }

    // ---

    // connect to the database
    //require('assets/db.php');

    $id = null;
    $action = null;

    $name = $password = $email = $facebook = $linkedin = $twitter = $status =  "";

// ----------------------------------------------

$limit = 10;
    
$res = $pdo->prepare("SELECT * FROM user WHERE status='U'");
$res->execute();
$allResp = $res->fetchAll(PDO::FETCH_ASSOC);
$total_results = $res->rowCount();
$total_pages = ceil($total_results/$limit);

if (!isset($_GET['page'])) {
    $page = 1;
} else{
    $page = $_GET['page'];
}
$start = ($page-1)*$limit;
$stmt = $pdo->prepare("SELECT * FROM user WHERE status='U' ORDER BY user_id DESC LIMIT $start, $limit");
$stmt->execute();

// set the resulting array to associative
$stmt->setFetchMode(PDO::FETCH_OBJ);
$results = $stmt->fetchAll();   
$conn = null;
$no = $page > 1 ? $start+1 : 1;

?>

<!-- Admin -->
<div class="container-fluid bgMarron">
    <div class="container">
        <div class="row d-flex flex-row justify-content-center align-items-center">
            <div class="col my-3">
                <h3 class="text-left">Administrateur</h3>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row d-flex flex-row justify-content-center align-items-center">
        <div class="col text-center">
            <h2>UTILISATEURS</h2>
        </div>        
    </div>    
    <div class="row">
        <div class="col-4 text-left mt-4">
            <small><?php echo('Affiche 1 à 3 de 3 entrées'); ?></small>
        </div>
        <div class="col-8 text-right">
            <?php if ($id == null){ ?>
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-outline-secondary mb-2">Search</button>                
                <!-- <button type="button" id="modal" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal"><i class="far fa-file" ></i> Ajouter</button> -->
                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success mb-2"><i class="far fa-file" ></i> Ajouter</button>
                <br>
            <?php } ?>              
        </div>
    </div>

    <div class="row">    
        <table id="user_data" class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>                            
                    <th># No.</th>                    
                    <th>Nom et prenom</th>
                    <th>E-mail</th>                    
                    <th width="160px">Action</th>
                </tr>
            </thead>
            <tbody>                        
                <?php foreach($results as $result){?>
                    <tr>
                        <td><?php echo ($no); ?></td>                        
                        <td><strong><?php echo ($result->name); ?></strong></td>
                        <td><?php echo ($result->email); ?></td>
                        <td>                           
                            <button type="button" id="update_btn" class="btn btn-primary mb-1" data-toggle="modal" data-target="#update_modal"><i class="far fa-file-alt" ></i></button>
                            <button type="button" id="update_btn" class="btn btn-warning mb-1" data-toggle="modal" data-target="#update_modal"><i class="far fa-edit" ></i></button>
                            <button type="button" id="delete_btn" class="btn btn-danger mb-1" data-toggle="modal" data-target="#delete_modal"><i class="far fa-trash-alt"></i></button>
                        </td>
                    
                    </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col text-center">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="?page=1">Première page</a></li>
                    <?php for($p=1; $p<=$total_pages; $p++){?>                
                        <li class="page-item"><a class="page-link" href="<?= '?page='.$p; ?>"><?= $p; ?></a></li>
                    <?php }?>
                    <li class="page-item"><a class="page-link" href="?page=<?= $total_pages; ?>">Dernière page</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Add data Modal  -->
<div id="userModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" role="document">
            <div class="modal-header">
                <h4 class="modal-title">Utilisateur │ Ajouter</h4>                
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>        
            <!-- http://localhost/assets/data_admin.php -->              
            <form action="" method="post" role="form" id="user_form" enctype="multipart/form-data">                      
                <div class="modal-body">                        
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-sm-3 text-right" for="name">Nom et prenom:</label>
                                <input class="form-control col-sm-8" type="text" name="name" id="name" placeholder="Entrer le nom d'utilisateur">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right" for="password">Mot de pas:</label>
                                <input class="form-control col-sm-8" type="text" name="password" id="password" placeholder="Entrer le mot de passe">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right" for="email">E-mail:</label>
                                <input class="form-control col-sm-8" type="email" name="email" id="email" placeholder="Entrer votre e-mail">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right" for="facebook">Facebook:</label>
                                <input class="form-control col-sm-8" type="text" name="facebook" id="facebook" placeholder="Entrer votre facebook link">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right" for="Linkedin">Linkedin:</label>
                                <input class="form-control col-sm-8" type="text" name="linkedin" id="linkedin" placeholder="Entrer votre linkedin link">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 text-right" for="twitter">Twitter:</label>
                                <input class="form-control col-sm-8" type="text" name="twitter" id="twitter" placeholder="Entrer votre twitter link">
                            </div>                                                                                          
                        </div>
                    </div>                        
                </div>
                <div class="modal-footer"> 
                    <input type="hidden" name="user_id" id="user_id" />
                    <input type="hidden" name="operation" id="operation" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>    
                    <!--
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="submit" id="add_data" class="btn btn-primary" name="add_data_btn">Ajouter</button>                      
                    -->
                </div>
            </form>            
        </div>
    </div>
</div>