<?php
    require_once('./Configs/conexao.php');

    

    class DadosModel extends Connect{
        private $table;
        protected $Titulo;
        protected $Descricao;
        protected $img;

        public function __construct() {
            parent::__construct();
            $this->table ='noticia';
        }

        function ListAllDados(){
            $sqlSelect = $this->conexao->query("SELECT * FROM $this->table");
            $resultQery = $sqlSelect->fetchAll();
            return $resultQery;
        }

        function Insert($dados) {
            try {
                $sql = "INSERT INTO noticia (titulo, descricao) 
                        VALUES ('{$dados["title"]}', '{$dados["descricao"]}')";
                $result = $this->conexao->query($sql);
        
                if ($result) {
                    return true;
                    //throw new Exception("Erro ao executar a consulta SQL: " . $this->conexao->errorInfo()[2]);
                }
            } catch (PDOException $e) {
                // Trata exceções do tipo PDOException e as relança como exceções genéricas
                throw new Exception("Erro ao executar a consulta SQL: " . $e->getMessage());
            }
        }

        function ExcluirMD(){
            //$sqlDelete 
        }

        function Atualizar(){
            //$sqlUpdate
        }

        public function SetTitle($tituloCTL){
            $this->Titulo = $tituloCTL;
        }

        public function GetTitle(){
            return $this->Titulo;
        }

        public function SetDescricao($descricaoCTL){
            $this->Descricao = $descricaoCTL;
        }

        public function GetDescricao(){
            return $this->Descricao;
        }

        public function SetIMG($IMGCTL){
            $this->img = $IMGCTL;
        }

        public function GetIMG(){
            return $this->img;
        }
    }
?>