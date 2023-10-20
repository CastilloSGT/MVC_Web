<?php

    require_once('./Model/DadosModel.php');
    require_once('./Classes/Validacao.php');

    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $Dados = new DadosModel();
            $dados = $_POST;

            $VRF = $Dados->Insert($dados);

            if($VRF){
                $resps = 'Cadastrado com sucesso';
            }else{
                $resps = 'Não foi possível cadastrar';
            }
            print "<script>alert('$resps');</script>";
            print "<script>location.href='?page=novo';</script>";

            break;
        default:
            break;
    }

    //try {
                //$validar = new Validacao();

                //$validar->setNome($dados["title"]);
                //$validar->setDescricao($dados["descricao"]);

                //$validar->Validar();
                //insere

            //} catch (\Throwable $th) {

                //echo json_encode(["error" => $th->getMessage()]);
            //}

            /*try {
                $Dados->SetTitle(empty($_POST["title"]) ? throw new Exception("Digite o título.") : $_POST["title"]);
                $Dados->SetDescricao(empty($_POST["descricao"]) ? throw new Exception("Digite a descrição.") : $_POST["descricao"]);
                $Dados->SetIMG(empty($_POST["img"]) ? throw new Exception("Coloque uma IMAGEM.") : $_POST["img"]);
            } catch (Exception $e) {
                print "<script>alert('" . $e->getMessage() . "');</script>";
                print "<script>location.href='?page=novo';</script>";
            }*/
    
    class DadosController{

    private $models;

    public function __construct() {
        $this->models = new DadosModel();
        }

        function ListAllDadosCTR(){
            $resultData = $this->models->ListAllDados();
            require_once('View/listagem.php');
        }

        

    }

?>