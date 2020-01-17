<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
   
        <div class="row">
            <div class="col col-md-12 mx-auto  px-5 rounded bg-primary"> 
                <div class="row">
                    <div class="col col-md-12 mx-auto my-4 text-center">
                     <h1 class = "text-light">Produtos Adidas</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col col-md-8 my-4  mx-auto">
                <table class="table">
                <tr> 
                    <th><img src="Imagem/camisa.png" alt="camisa" title="Camisa" height="200" />  </th>
                    <th><img src="Imagem/kkk.jpg" alt="relogio" title="Relógio" height="200" />  </th>
                    <th><img src="Imagem/bon.jfif" alt="bone" title="Boné" height="200" />  </th>   
                    </tr>    
                    <tr> 
                    <th><img src="Imagem/s.jfif" alt="tenis" title="Tenis" height="200" />  </th>
                    <th><img src="Imagem/co.jfif" alt="corta-vento" title="Corta Vento" height="200" />  </th>
                    <th><img src="Imagem/ve.jfif" alt="vestido" title="Vestido" height="200" />  </th>   
                    </tr>    
                </table> 
            </div>     
        </div>
            <div class="row">
                <div class="col col-md-12 mx-auto py-2 bg-primary text-center text-light">
                    <form method="get" action="detalhes-produto.php">
                        <h5 class="font-weight-bold">Selecione o produto escolhido:</h5>
                        <select name="id_produto">
                            <option value="1">Camisa</option>
                            <option value="2">Relógio</option>
                            <option value="3">Boné</option>
                            <option value="4">Tênis</option>
                            <option value="5">Corta Vento</option>
                            <option value="6">Vestido</option>
                        </select><br>
                        <button class="btn btn-dark" type="submit" >Ver detalhes</button>
                    </form>
                </div>
            </div>
</body>
</html>
  