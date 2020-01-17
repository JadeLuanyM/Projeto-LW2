<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
     <!-- Bootstrap CDN -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-primary">

    <div class="container">
        <div class="row">
            <div class="col col-md-10 mx-auto my-5 px-5 rounded bg-light"> 
                <div class="row">
                    <div class="col col-md-12 mx-auto my-4 text-center">
                        <h2>Cadastro</h2>
                        <br>
                        
                        <form method="post" action="produtos.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome Completo:</label>
                                <br>
                                <input required class="form-control" placeholder="Ex: Jade Luany Montilha Hidalgo" type="text" name="nome" id="nome" autofocus>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nome-user">Nome de Usuário:</label>
                                <br>
                                <input required class="form-control" placeholder="Ex: jadeluany" type="text" name="nome" id="nomeuser">
                            </div>  
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="senha">Senha:</label>
                                <br>
                                <input required class="form-control" placeholder="Defina uma senha" type="password" name="senha" id="senha">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="confSenha">Confirmação da senha:</label>
                                <br>
                                <input required class="form-control" placeholder="Confirme a senha" type="password" name="confSenha">
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <br>
                                <input required class="form-control" placeholder="Ex: jadeluany@gmail.com" type="email" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF:</label>
                                <br>
                                <input required class="form-control" placeholder="Digite seu CPF Ex: 16907475871" type="text" name="cpf" maxlength="11" id="cpf">
                            </div>
                            
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="endereco">Endereço:</label>
                                <br>
                                <input required class="form-control" placeholder="Ex: Rua Nancy da Silva " type="text" name="endereco" id="endereco">
                            </div>

                            <div class="form-group col-md-5">
                                <label for="cep">CEP: </label>
                                <br>
                                <input required class="form-control" placeholder="Digite seu CEP" type="text" name="cep" maxlength="8" id="cep">
                            </div>

                            <div class="form-group col-md-2">
                                Estado: <select name="Estado">
                                <option value="null" selected="selected" disabled>Selecione:</option>
                                     <option value="AC">Acre</option>  
                                     <option value="AL">Alagoas</option>
                                     <option value="AP">Amapá</option>
                                     <option value="AM">Amazonas</option>
                                     <option value="BA">Bahia</option>
                                     <option value="CE">Ceará</option>
                                     <option value="DF">Distrito Federal</option>  
                                     <option value="ES">Espirito Santo</option>
                                     <option value="GO">Goiás</option>
                                     <option value="MA">Maranhão</option>
                                     <option value="MT">Mato Grosso</option>
                                     <option value="MS">Mato Grosso do Sul</option>
                                     <option value="MG">Minas Gerais</option>  
                                     <option value="PA">Pará</option>
                                     <option value="PB">Paraíba</option>
                                     <option value="PR">Paraná</option>
                                     <option value="PE">Pernanbuco</option>
                                     <option value="PI">Piauí</option>
                                     <option value="RJ">Rio de Janeiro</option>  
                                     <option value="RN">Rio Grande do Norte</option>
                                     <option value="RS">Rio Grande do Sul</option>
                                     <option value="RO">Rondônia</option>
                                     <option value="RR">Roraima</option>
                                     <option value="SC">Santa Catarina</option>
                                     <option value="SP">São Paulo</option>  
                                     <option value="SE">Sergipe</option>
                                     <option value="TO">Tocantins</option>
                                    </select>
                                <br>
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="telefone">Telefone:</label>
                                <br>
                                <input required class="form-control" placeholder="Ex: 11 98765432" type="tel" name="telefone" id="telefone">
                            </div>
                                    
                            <button class="btn btn-dark" type="submit">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>    </div>
    </body>
</html>