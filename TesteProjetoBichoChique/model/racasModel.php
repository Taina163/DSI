<?php

//#declare <stdlib.h>
require_once 'ConexaoMysql.php';

/**
 * Description of racasModel
 *
 * @author aluno
 */
class racasModel {

    //Atributos ou propriedades
    protected $id;
    protected $nome;
    protected $descricao;
    protected $faixaPreco;
    protected $faixaPeso;

    //Métodos acessores (get) e modificadores (set)
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getFaixaPreco() {
        return $this->faixaPreco;
    }

    public function getFaixaPeso() {
        return $this->faixaPeso;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function setFaixaPreco($faixaPreco): void {
        $this->faixaPreco = $faixaPreco;
    }

    public function setFaixaPeso($faixaPeso): void {
        $this->faixaPeso = $faixaPeso;
    }

    //Método construtor
    public function __construct() {
        
    }

    //Métodos especialistas
    public function loadAll() {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM racas';
        //Executar método de consulta
        $resultList = $db->Consultar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $resultList;
    }

    /*
     * Carrega a raça pelo identificador único
     */

    public function loadById($id) {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM racas where id =' . $id;
        //Executar método de consulta
        $resultList = $db->Consultar($sql);

        //Verifica se retornou um registro da base de dados
        if ($db->total == 1) {
            //Se retornou preenche as propriedades de raça
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->nome = $value['nome'];
                $this->descricao = $value['descricao'];
                $this->faixaPreco = $value['faixa_preco'];
                $this->faixaPeso = $value['faixa_peso'];
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
                . 'nome="'.$this->nome.'",'
                . 'descricao="'.$this->descricao.'",'
                . 'faixa_peso ="'.$this->faixaPeso.'",'
                . 'faixa_preco ="'.$this->faixaPreco.'"'
                . 'WHERE id = '.$this->id;

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
        $sql = 'DELETE FROM racas WHERE id='.$this->id;
      

        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }

}
