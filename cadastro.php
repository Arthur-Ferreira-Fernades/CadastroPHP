<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="cadastroefe.css">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro Efetuado</h1>
    <div class="conteudo">  

        <div class="formulario">
            <div class="conjunto1">
                <div class="borda">
                    <h2>Info Pessoal</h2>
                    <div class="campos">
                        <?php
                            echo "Nome: ". $_POST["nome"]  . "<br><br>";

                            echo "Idade: ". $_POST["idade"] . "<br><br>";

                            echo "Telefone: ". $_POST["telefone"] . "<br><br>";

                            echo "Email:  ". $_POST["email"] . "<br><br>"
                        ?>
                    </div>
                </div>
                <div class="borda">
                    <h2>Dados do curso</h2>
                    <div class="campos">
                        <?php
                            echo "Curso escolhido: ". $_POST["curso"] . "<br><br>";

                            echo "Periodo desejado: ". $_POST["periodo"] . "<br>"
                        ?>
                    </div>
                </div>
            </div>
            <div class="conjunto2">
                <div class="borda">
                    <h2>Endereço</h2>
                    <div class="campos">
                        <?php
                            echo "Endereço: ". $_POST["endereco"] . "<br><br>";

                            echo "Bairro: ". $_POST["bairro"];

                            echo " Numero: ". $_POST["numero"] . "<br><br>";

                            echo "Cidade: ". $_POST["cidade"] . "<br><br>";

                            echo "Estado: ". $_POST["estado"] . "<br>"
                        ?>
                    </div>
                </div>
                <div class="borda">
                    <h2>Observação</h2>
                    <div class="campos">
                        <?php
                            echo "Mensagem: ". $_POST["mensagem"]. "<br><br>";

                            if (!isset($_POST["info"])) { //!isset ve se o valor existe ou não
                                $info = "Não";
                            } else {
                                $info = "Sim";
                            }

                            echo "Deseja receber notificação?"."<br>".$info."</div>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

