<?php

class proprietariosModel {
   
    protected $id;
    protected $nome;
    protected $endereco;
    protected $fone;
    protected $email;
    protected $senha;
    
    public function __construct() {
        
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getFone() {
        return $this->fone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setEndereco($endereco): void {
        $this->endereco = $endereco;
    }

    public function setFone($fone): void {
        $this->fone = $fone;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

     /*
     * Loga na base de dados
     */
    public function login($email, $senha) {

        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'SELECT * FROM proprietarios'
                . ' where email ="'.$email.'" '
                . 'AND senha="'.$senha.'"';
        //Executar método de consulta
        $resultList = $db->Consultar($sql);

        //Verifica se retornou um registro da base de dados
        if ($db->total == 1) {
            //Se retornou preenche as propriedades de proprietarios
            foreach ($resultList as $value) {
                $this->id = $value['id'];
                $this->nome = $value['nome'];
                $this->email = $value['email'];
                $this->endereco= $value['endereco'];
                $this->fone = $value['fone'];
                $this->senha = $value['senha'];
            }
        }


        //Desconectar do banco
        $db->Desconectar();
        
        return $db->total;
    }


    
    
}
