<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sistema de Login - Tico Esteves</title>
</head>
<body>
    
   <div id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Login</h3>
                            <div>
                                Usuário-teste: admin <br>
                                Senha-teste: 1234
                            </div>
                            <?php 
                            if(isset($_SESSION['loginErro'])){
                                echo $_SESSION['loginErro'];
                                unset($_SESSION['loginErro']);
                            }
                            ?>
                        </div>
                        <div class="card">
                        <div class="card-body">
                            <form action="login.php" method="post">
                                <div class="mb-3">
                                    <label>Usuário:</label>
                                    <input type="text" name="user" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Senha:</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                    By <a href="https://ticoesteves.hgpage.com.br/" target="_blank">Tico Esteves</a>
                </div>
            </div>
        </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>