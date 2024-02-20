<?php

class animaisModel {

    protected $id;
    protected $nome;
    protected $sexo;
    protected $peso;
    protected $racas_id; //chave estrangeira
    protected $raca; //um objeto da raça do animal

    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getRacas_id() {
        return $this->racas_id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }

    public function setRacas_id($racas_id): void {
        $this->racas_id = $racas_id;
    }
    
    public function getRaca() {
        return $this->raca;
    }

    public function setRaca($raca): void {
        $this->raca = $raca;
    }

    
    //Métodos especialistas
    public function loadAll() {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM animais';
        //Executar método de consulta
        $resultList = $db->Consultar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $resultList;
    }

    /*
     * Carrega os animais pelo identificador único
     */
    public function loadById($id) {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM animais where id =' . $id;
        
        //Executar método de consulta
        $resultList = $db->Consultar($sql);

        //Verifica se retornou um registro da base de dados
        if ($db->total == 1) {
            //Se retornou preenche as propriedades de raça
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->nome = $value['nome'];
                $this->sexo = $value['sexo'];
                $this->peso = $value['peso'];
                $this->racas_id = $value['racas_id'];
                
                require_once './racasModel.php';
                $raca = new racasModel();
                $this->raca = $raca->loadById($this->racas_id);
            }
        }


        //Desconectar do banco
        $db->Desconectar();

        return $resultList;
    }

    public function insert() {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'INSERT INTO racas values(0,"chowchow","carrocho lindo","Entre 2 e 5 kg","Entre R$ 500 e R$ 600.")';
        $sql = 'INSERT INTO racas '
                . 'values(0,"' . $this->nome . '",'
                . '"' . $this->descricao . '",'
                . '"' . $this->faixaPeso . '",'
                . '"' . $this->faixaPreco . '")';
        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }

    public function update() {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //$sql = 'UPDATE racas SET nome="",descricao="", faixa_peso ="", faixa_preco ="" WHERE 1';
        $sql = 'UPDATE racas SET '
                . 'nome="' . $this->nome . '",'
                . 'descricao="' . $this->descricao . '",'
                . 'faixa_peso ="' . $this->faixaPeso . '",'
                . 'faixa_preco ="' . $this->faixaPreco . '"'
                . 'WHERE id = ' . $this->id;

        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }

    public function delete() {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //$sql = 'DELETE FROM racas WHERE id=';
        $sql = 'DELETE FROM racas WHERE id=' . $this->id;

        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }

}
