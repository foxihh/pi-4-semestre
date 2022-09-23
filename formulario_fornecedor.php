<?php

    if(isset($_POST['submit'])){
        /*
        print_r('Nome: ' . $_POST['nome']);
        print_r('<br>');
        print_r('E-mail: ' . $_POST['email']);
        print_r('<br>');
        print_r('Telefone: ' . $_POST['telefone']);
        print_r('<br>');
        print_r('Sexo: ' . $_POST['genero']);
        print_r('<br>');
        print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
        print_r('<br>');
        print_r('Cidade: ' . $_POST['cidade']);
        print_r('<br>');
        print_r('Estado: ' . $_POST['estado']);
        print_r('<br>');
        print_r('Endereço: ' . $_POST['endereco']);
        */

        include_once('config_pi.php');

        $nomeEmpresa = $_POST['nomeEmpresa'];
        $cnpj = $_POST['cnpj'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $areaAtuacao = $_POST['areaAtuacao'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $banco = $_POST['banco'];
        $agencia = $_POST['agencia'];
        $conta = $_POST['conta'];

        $result = mysqli_query($conexao, "INSERT INTO tabela_fornecedor(nomeEmpresa,cnpj,email,telefone,areaAtuacao,cep,endereco,banco,agencia,conta) VALUES ('$nomeEmpresa','$cnpj','$email','$telefone','$areaAtuacao','$cep','$endereco','$banco','$agencia','$conta')");

    }

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PI</title>
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
            width: 20%;
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
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5px;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top:  -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
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
        <form action="formulario_fornecedor.php" method="POST">
            <fieldset>
                <legend>
                    <b>Formulário Fornecedor</b>
                </legend>
                
                <br>

                <!--Nome Completo-->
                <div class="inputBox">
                    <input type="text" name="nomeEmpresa" id="nomeEmpresa" class="inputUser" required>
                    <label for="nomeEmpresa" class="labelInput">Nome da Empresa</label>
                </div>

                <br><br>

                <!--CNPJ-->
                <div class="inputBox">
                    <input type="text" name="cnpj" id="cnpj" class="inputUser" required>
                    <label for="cnpj" class="labelInput">CNPJ</label>
                </div>

                <br><br>

                <!--E-mail-->
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>

                <br><br>

                <!--Telefone-->
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <br><br>

                <!--Área de Atuação-->
                <div class="inputBox">
                    <input type="text" name="areaAtuacao" id="areaAtuacao" class="inputUser" required>
                    <label for="areaAtuacao" class="labelInput">Área de Atuação</label>
                </div>

                <br><br>

                <!--CEP-->
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser" required>
                    <label for="cep" class="labelInput">CEP</label>
                </div>
                
                <br><br>

                <!--Endereço-->
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço Completo</label>
                </div>

                <br><br>

                <!--Pagamento-->
                <p>Pagamento</p>
                <div class="inputBox">
                    <input type="text" name="banco" id="banco" class="inputUser" required>
                    <label for="banco" class="labelInput">Banco</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="agencia" id="agencia" class="inputUser" required>
                    <label for="agencia" class="labelInput">Agência</label>
                </div>

                <br><br>
                
                <div class="inputBox">
                    <input type="text" name="conta" id="conta" class="inputUser" required>
                    <label for="conta" class="labelInput">Conta</label>
                </div>

                <br><br>

                <!--Botão Enviar-->
                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>
    </div>
</body>
</html>