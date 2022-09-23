<?php

    include("config_pi.php");

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Busca</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 60%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }        
    </style>
</head>
<body>
    <div class="box">
        <fieldset>
            <legend>
                <b>Consulta do Aluno</b>
            </legend>
            <form action="" method="POST">
                <input name="busca" value="<?php if(isset($_POST['busca'])) echo $_POST['busca']; ?>" placeholder="Buscar por:" type="text">
                <button type="submit">Pesquisar</button>
            </form>

            <br><br>

            <table width="1200px" border="1">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>CEP</th>
                    <th>Endereço</th>
                    <th>Curso</th>
                    <th>Banco</th>
                    <th>Agência</th>
                    <th>Conta</th>
                </tr>

                <?php
                    if(!isset($_POST['busca'])){
                        ?>
                <tr>
                    <td colspan="12">Digite algo para pesquisar...</td>
                </tr>

                <?php
                } else{
                    $pesquisa = $conexao->real_escape_string($_POST['busca']);

                    $sql_code = "SELECT * 
                        FROM tabela_aluno 
                        WHERE nome LIKE '%$pesquisa%' 
                        or cpf LIKE '%$pesquisa%' 
                        or email LIKE '%$pesquisa%' 
                        or telefone LIKE '%$pesquisa%' 
                        or sexo LIKE '%$pesquisa%' 
                        or data_nasc LIKE '%$pesquisa%' 
                        or cep LIKE '%$pesquisa%' 
                        or endereco LIKE '%$pesquisa%' 
                        or curso LIKE '%$pesquisa%' 
                        or banco LIKE '%$pesquisa%' 
                        or agencia LIKE '%$pesquisa%'
                        or conta LIKE '%$pesquisa%'";
            
                    $sql_query = $conexao->query($sql_code) or die("Erro ao consultar! " . $conexao->error);
                    
                    if($sql_query->num_rows == 0){
                ?>
                    <tr>
                        <td colspan="12">Nenhum resultado encontrado...</td>
                    </tr>
                    <?php } else{
                        while($dados = $sql_query->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $dados['nome']; ?></td>
                                <td><?php echo $dados['cpf']; ?></td>
                                <td><?php echo $dados['email']; ?></td>
                                <td><?php echo $dados['telefone']; ?></td>
                                <td><?php echo $dados['sexo']; ?></td>
                                <td><?php echo $dados['data_nasc']; ?></td>
                                <td><?php echo $dados['cep']; ?></td>
                                <td><?php echo $dados['endereco']; ?></td>
                                <td><?php echo $dados['curso']; ?></td>
                                <td><?php echo $dados['banco']; ?></td>
                                <td><?php echo $dados['agencia']; ?></td>
                                <td><?php echo $dados['conta']; ?></td> 
                            </tr>

                            <?php
                            
                        }
                    }
                    ?>

                <?php } ?>

            </table>
        </fieldset>
    </div>    
</body>
</html>