<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Estilo customizado para esta página -->
        <link rel="stylesheet" type="text/css" href="css/login.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <title>Re-Publica | Login</title>

        

    </head>
    <body>
        <div class="container">
            <div class="row"><!-- Título -->
                <div class="col-sm-12">
                    <center>
                        <a href="index.html"><img id="img-logo"src="img/Logo.png"></a>
                    </center>
                </div>
            </div> <!-- fim da row -->
            <div class="row conteudo"> <!-- Conteúdo -->
                <div class="col-sm-12">
                    <center>
                        <h3 id="titulo">Entre na sua conta</h3>
                        <form method="post" action="logar.php">
                            <label>Usuário: <input type="text" name="login" id="login" placeholder="Digite seu usuário aqui..."></label></p>
                            <label>Senha: <input type="password" name="senha" id="senha" placeholder="Digite sua senha aqui..."></label></p> 
                            <a href="index.php"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                            <p>Esqueceu sua senha? <a href="rec_senha.html">Clique aqui</a></p>
                        </form>
                    </center>
                </div>
            </div>  <!-- Fim do conteúdo -->

            <!-- JavaScript (Opcional) -->
            <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>