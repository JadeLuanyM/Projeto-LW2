<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body class="bg-success">

    <div class="container">
        <div class="row">
            <div class="col col-md-8 mx-auto my-5 rounded bg-light">
                <div class="row">
                    <div class="col col-md-6 mx-auto my-4 text-center">
                        
                        <h2>Login</h2>
                        <br>
                        
                        <form method="post" action="validacao.php">

                            <div class="form-group">
                                <label for="user">Usuário:</label>
                                <br>
                                <input class="form-control" type="text" name="login" id="user" autofocus>
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <br>
                                <input class="form-control" type="password" name="senha" id="senha">
                            </div>

                            <button class="btn btn-dark" type="submit" name="validar">Enviar</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>