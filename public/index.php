<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Trabalho Pós: Galvão</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .container-geral {
        margin-top: 20px;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        border: 1px #000 solid;
    }

    .cabecalho {
        width: 100%;
        text-align: center;
        margin: auto;
        padding: auto;
    }

    .cabecalho hr {
        height: 1px;
        width: 100%;
        background-color: #000;

    }

    td {
        text-align: center;
    }

    th {
        text-align: center;
    }
</style>

<body>
    <div class="container-geral">
        <div class="container">
            <div class="cabecalho">
                <h1>Trabalho Pós-Graduação Alfa</h1>
                <hr />
                <h4>Professor Galvão</h4>
            </div>
            <table class='table table-dark table-hover'>
                <thead>
                    <tr>
                        <th scope='col'> ID </th>
                        <th scope='col'> Nome </th>
                        <th scope='col'> Telefone </th>
                        <th scope='col'> Email </th>
                    </tr>
                </thead>

                <?php
                require '../src/PosAlfa2019/usuario.php';
                $usuario = new Usuario();
                $usuario->searchAllData();
                ?>
            </table>
        </div>
    </div>
</body>

</html>