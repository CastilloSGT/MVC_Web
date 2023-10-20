<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Horizontal</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav id="menu-h">
            <ul>
                <li>
                    <a href="index.php">
                        Home
                    </a>
                </li>
                
                <li><a href="?page=novo">Cadastro tst</a></li>
                
                <li><a href="?page=listar">Listar</a></li>
                
                <li><a href="?page=editar">Editar</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    switch(@$_REQUEST["page"]){
                        case 'novo':
                            include("View/cadastro.php");
                        break;
                        case 'listar':
                            break;
                        case 'salvar':
                            include("Controller/DadosController.php");
                            break;
                        case 'editar':
                            
                        break;

                        default:
                            print "Bem vindo";
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>