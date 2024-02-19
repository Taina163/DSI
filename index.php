<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
<style>
    html{
        background-image: url(img/NetflixFundo.jpeg), url(img/FundoHome.jpg);
        background-position: center-fixed, center-fixed;
        background-size: cover, cover;
        background-repeat: no-repeat no-repeat;
        opacity: 1, 0.5;
        
    }
   
    .terms{
        color: #737373;
        font-size: 13px;
    }
    .terms a{
        text-decoration: none;
        color:#0071eb;
    }
    
     
</style>
    </head>
    <body class="container" style="background-color: rgba(0, 0, 0, 0)">
<div class="row">
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="img/LogoNetflix.png" alt="Logo" style="width: 170px;">
            </a>
        </div>
    </nav>
    
</div>
        
        <div class="row" style="margin:30px; padding: 20px">
            <div class="col-md-4"></div>
            <div class="col-md-4" style= "background-color: rgba(0, 0, 0, 1); color: white">
                <h2>Entrar</h2>
            <form  method="post" action="controller/loginController.php">  
          
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <?php
                    if (isset($_COOKIE['email'])) {
                        echo('<input type="email" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email"
                            value="'.$_COOKIE['email'].'" required="">');
                    } else {
                        echo('<input type="email" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email" required="">');
                    }
                    ?>
                    
                </div>
                <div class="mb-3 mt-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="senha" 
                           placeholder="Insira sua senha" name="senha" required="">
                </div>
                 <div class="mb-3 mt-3">

                    <?php
                    if (isset($_COOKIE['email'])) {
                        echo ('<input type="checkbox" class="form-check-input" id="lembrar" 
                           name="lembrar" checked value="1">');
                    } else {
                        echo ('<input type="checkbox" class="form-check-input" id="lembrar" 
                           name="lembrar" value="1">');
                    }
                    ?>
                    <label for="lembrar" class="form-check-label">Lembre de mim</label>

                </div>
                <div class="d-grid">
                    <input type="submit" value="Entrar"
                           class="btn btn-mg btn-block btn-danger">
                </div>
                <div class="terms">
                    <p>Esta página é protegida pelo Google reCAPTCHA
                        para garantir que você não é um robô. <a href="#">Saiba Mais</a>
                </div>     
                    
                <div class="d-grid">
                    <?php
                    //capturavam a variável query string "cod"
                    @$cod = $_REQUEST['cod'];
                    if (isset($cod)) {
                        if ($cod == '171') {
                            echo ('<br><div class="alert alert-danger">');
                            echo ('Verifique usuário ou senha.');
                            echo ('</div>');
                        } else if ($cod == '172') {
                            echo ('<br><div class="alert alert-warning">');
                            echo ('Sua sessão expirou. Realize o login novamente.');
                            echo ('</div>');
                        }
                    }
                    ?>
                </div>

            
        </form>
    </div>
    <div class="col-md-4"> </div>
</div>
</body>
</html>