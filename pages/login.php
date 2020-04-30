<?php

    $error = null;    
    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $stm = $pdo->query("SELECT * from user where email = '$email'");
        $result = $stm->fetch();

        if ($email === $result['email'] && password_verify($password, $result['password'])) {
            session_start();
            $_SESSION['connecte'] = 1;
            $_SESSION['status'] = $result['status'];
            echo $_SESSION['status'];
            if ($_SESSION['status'] === "A") {
                header('Location: http://localhost/admin');
            } else {
                header('Location: http://localhost/dashboard');
            }            
            exit();
        } else {
            $error = "Identifiants incorrects";
        }        
    }
?>

<div class="container-fluid bgMarron text-center">
    <br>
    <div class="row d-flex flex-row justify-content-center align-items-center">
       <div class="col-3">
            <img src="../img/victor-hugo.jpg" alt="">           
       </div>
    </div>
    <div class="row d-flex flex-row justify-content-center align-items-center"> 
        <div class="col-4 my-4">
            <h4 class="text-left">Login</h4>
            <p><?php if ($error != null) { echo($error); } ?></p>
            <br>
            <form action="" method="post">
                <div class="form-group text-left">
                    <label for="email">Votre adresse e-mail</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    
                </div>
                <div class="form-group text-left">
                    <label for="password">Votre mot de passe</label>
                    <input type="password" name="password" class="form-control" id="password">
                    <a href="/registration" style="text-decoration: none;">Registration</a>
                </div>                
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>            
            </form>    
        </div>
    </div>
    <br>
</div>