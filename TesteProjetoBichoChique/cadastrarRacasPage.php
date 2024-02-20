<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    </head>
    <body>
        <form method="post" action="controller/racasController.php">
            <div class="container">
                <?php
                if ($_REQUEST) {
                    $cod = $_REQUEST['cod'];

                    if ($cod == 'success') {
                        echo '<div class="alert alert-success">';
                        echo 'Registro inserido com sucesso.';
                        echo '</div>';
                    } else if ($cod == 'error') {
                        echo '<div class="alert alert-danger">';
                        echo '<span>Erro:</spam>Ocorreu um erro. Tente mais tarde.';
                        echo '</div>';
                    } else if ($cod == 'edit') {
                       require_once './controller/racasController.php';
                       //Capturo o id que é informado para edição
                       $id = $_REQUEST['id'];
                       //carrego o objeto de raças que vai ser modificado.
                       $racaObject = loadById($id);
                       //print_r($racaObject);
                    }
                    
                  
                }
               
                ?>
                <h1>Cadastro de raças</h1>
                <input type="hidden" name="id" value="<?php echo @(isset($racaObject)? $racaObject->getId():'') ?>">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" value="<?php echo @(isset($racaObject)? $racaObject->getNome():'') ?>" name="nome" id="nome">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                    <input type="text" class="form-control" id="descricao" value="<?php echo @(isset($racaObject)? $racaObject->getDescricao():'') ?>" name="descricao">
                </div> 
                <div class="form-group">
                    <label for="faixaPreco">Faixa de preço:</label>
                    <input type="text" class="form-control" id="faixaPreco" value="<?php echo @(isset($racaObject)? $racaObject->getFaixaPreco():'') ?>" name="faixaPreco">
                </div> 
                <div class="form-group">
                    <label for="faixaPeso">Faixa de peso:</label>
                    <input type="text" class="form-control" id="faixaPeso" value="<?php echo @(isset($racaObject)? $racaObject->getFaixaPeso():'') ?>" name="faixaPeso">
                </div> 
                <br>
                <input type="submit" class="btn btn-success" value="Salvar">
            </div>
        </form>
    </body>
</html>
