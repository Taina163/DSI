<?php

if ($_POST) {
    //inserir algo na bd (cadastrar)
    //Jeito antigo
    //$nome = $_POST['nome'];
    //$descricao = $_POST['descricao'];
    //$faixaPeso = $_POST['faixaPeso'];
    //$faixaPreco = $_POST['faixaPreco'];
    //insertOld($nome, $descricao, $faixaPeso, $faixaPreco);
    //Jeito novo
    require_once '../model/racasModel.php';
    $raca = new racasModel();
    $raca->setNome($_POST['nome']);
    $raca->setDescricao($_POST['descricao']);
    $raca->setFaixaPeso($_POST['faixaPeso']);
    $raca->setFaixaPreco($_POST['faixaPreco']);

    //Configuro o id do objeto.
    $raca->setId($_POST['id']); //se for um novo registro vai ser sempre ''
    //Se a variável id que vier do form for vazia '' então insere um novo registro
    //Chamo para ver se o id do objeto é vazio.
    if (empty($raca->getId())) {
        //Insere um novo registro
        $total = $raca->insert();
    } else {
        //Atualiza o registro existente.
        $total = $raca->update();
    }

    //echo 'funcionou';

    if ($total == 1) {
        //Se estiver inserindo um novo registro somente exibo  a msg.
        if (empty($raca->getId())) {
            header('location:../cadastrarRacasPage.php?cod=success');
        } else {
            //Atualizei e foi um sucesso
            header('location:../listarRacasPage.php?cod=success');
        }
    } else {
        header('location:../cadastrarRacasPage.php?cod=error');
    }
} else if ($_REQUEST) {
    //Se existir a query string cod e cod == del
    if (isset($_REQUEST['cod']) && $_REQUEST['cod'] == 'del') {
        //Importa a model
        require_once '../model/racasModel.php';
        //Cria o objeto racas
        $raca = new racasModel();
        //Se o comando for par excluir
        if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
            //configuro o id
            $raca->setId($_REQUEST['id']);
            //exclui em seguida
            $total = $raca->delete();
            if ($total == 1) {
                header('location:../listarRacasPage.php?cod=success');
            }
        }
    }
} else {
    //Selecionar todos os registros
    loadAll();
}

function loadAll() {
    //Importo raças model
    require_once './model/racasModel.php';
    //Crio um objeto do tipo raças
    $racas = new racasModel();
    $racasList = $racas->loadAll();

    return $racasList;
}

function loadById($id) {
    //Importo raças model
    require_once './model/racasModel.php';
    //Crio um objeto do tipo raças
    $racas = new racasModel();

    //Executa o método para carregar por id
    $racas->loadById($id);

    //Retorna um objeto do tipo raças.... 
    return $racas;
}
