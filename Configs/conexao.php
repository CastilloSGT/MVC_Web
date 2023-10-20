<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'bdtst');

    class Connect{
        protected $conexao;

        public function __construct() {
            $this->connectDataBase();
        }

        function connectDataBase(){
            try{
                $this->conexao = new PDO('mysql:host='.HOST.';dbname='.BASE, USER, PASS);
            }
            catch(PDOException $e){
                echo "Erro".$e->getMessage();
                die();
            }
        }
    }
?>
