

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

        <!-- Estilo customizado -->
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <title>Re-Publica - Seu site de república</title>
        <script>
            function submitLista() {
                document.fomrLista.submit();
            }
        </script>
            

    </head>
    <body>
        <div class="container-fluid">
            <div class="row menu">
                <div class="col-sm-12">
                    <ul class="nav justify-content-end">
                        
                        <?php

                        session_start();
                        if(isset($_SESSION['logado'])){
                            echo "  <li class='nav-item'>
                                        <a class='nav-link' href='logout.php'>Sair</a>
                                    </li>
                                    <li class='nav-item'>
                                        <a class='nav-link' href='anunciar.php'>Anuncie conosco</a>
                                    </li>";
                        }
                        else{
                            echo"
                            <li class='nav-item'>
                            <a class='nav-link active' href='cadastro.php'>Cadastre-se</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='login.php'>Entrar</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='anuncia.php'>Anuncie conosco</a>
                            </li>";
                        }
                        ?>
                    </ul>
                </div>    
            </div>

            <div class="row cabecalho">
                <div id="logo">
                    <img src="img/logo_transp.png" name="re-publica">
                </div>

            </div>

            <div class="row descricao">
                <div id="descricao">
                    <p>Já pensou em descolar uma <em>república para morar</em>, pela internet? Seja bem-vindo
                        à mais nova plataforma para divulgação e locação de quartos. Aqui
                        você tem vários filtros para encontrar exatamente o que você procura. Junte-se à nós!</p>
                </div>
            </div>

            <div class="row formulario-busca">
                <div id="busca-inicial">
                    <form method="POST" action="resultadoLista.php" name="formLista">
                        <label>
                            <p>Qual cidade você deseja?</p>
                            <select name="cidade">
                                <option value="0">*Selecione a cidade*</option>
                                <option value="1">Formiga</option>
                                <!--<option>Arcos</option>
                                <option>Divinópolis</option>
                                <option>Córrego Fundo</option>-->
                            </select>
                        </label><br>
                        <label>
                            <p>Qual a margem de preço desejada?</p>
                            <select name="preco">
                                <option value="0">*Selecione o valor*</option>
                                <option value="1">R$000,00 à R$100,00</option>
                                <option value="2">R$101,00 à R$200,00</option>
                                <option value="3">R$201,00 à R$300,00</option>
                                <option value="4">R$301,00 à R$400,00</option>
                                <option value="5">R$401,00 à R$500,00</option>
                                <option value="6">R$501,00 à R$600,00</option>
                                <option value="7">R$601,00 à ...</option>
                            </select>
                        </label><br>
                        <label>
                            <p>Para qual gênero será o quarto?</p>
                            <input type="radio" name="sexo" value="1">Masculino
                            <input type="radio" name="sexo" value="2">Feminino
                            <input type="radio" name="sexo" value="0" checked>Ambos
                        </label><br>

                        <button type="reset" class="btn btn-outline-secondary">Limpar</button> 
                        <button onclick="" class="btn btn-outline-info">Buscar</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div id="footer">
                    <p>© Copyright 2018 - Re-Publica</p>
                </div>
            </div>

        </div>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>