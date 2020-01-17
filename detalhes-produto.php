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
                     <h1 class = "text-white">Detalhes do Produto </h1>
                    </div>
                </div>s
            </div>
       </div>
             <div class="row text-center">
                <div class="col col-md-8 my-4  mx-auto">
                <?php
                $item = $_GET['id_produto']; // A variavel tem que ser de acordo com o metodo;
                $produtos = array();
                $produtos[1]['detalhes'] ="Detalhes da Camisa <br>Codigo: 098234-21 <br> Camisa Adidas de Malha Fina. Disponivel nas cores Preto, Azul, Amarelo e Branco. <br> Tamanhos: P, M, G, GG <br> Valor: R$39,90";
                $produtos[1]['img'] = "<img src='Imagem/camisa.png'>";  
                $produtos[2]['detalhes'] = "Detalhes do Relogio <br> Codigo: 870928-23  <br> Relogio Adidas com pulseira de Couro, aprova d'agua. Disponivel nas cores Preto e Branco. <br> Preco: R$325,69";
                $produtos[2]['img'] = "<img src='Imagem/kkk.jpg' style='width:150px'>"; 
                $produtos[3]['detalhes'] = "Detalhes do Bone <br> Codigo: 2015846-58  <br> Bone Adidas Basico. Disponivel nas cores Preto,Branco e Azul Marinho. <br> Preco: R$70,80";
                $produtos[3]['img'] = "<img src='Imagem/bon.jfif' style='width:190px'>"; 
                $produtos[4]['detalhes'] = "Detalhes do Tenis <br> Codigo: 85214736-29<br> Tenis Adidas Basico. Disponivel nas cores Preto e Branco. <br> Preco: R$169,80";
                $produtos[4]['img'] = "<img src='Imagem/s.jfif' style='width:190px'>"; 
                $produtos[5]['detalhes'] = "Detalhes do Corta Vento <br> Codigo: 7841258-94  <br> Corta Vento Adidas Brilhoso. Disponivel nas cores Preto,Branco, Rosa e Azul Marinho. <br> Preco: R$230,65";
                $produtos[5]['img'] = "<img src='Imagem/co.jfif' style='width:190px'>"; 
                $produtos[6]['detalhes'] = "Detalhes do Vestido <br> Codigo: 36589400-58  <br> Vestido Adidas Basico. Disponivel nas cores Preto,Branco, Cinza, Rosa, Verde e Roxo. <br> Preco: R$126,30";
                $produtos[6]['img'] = "<img src='Imagem/ve.jfif'>";
                echo $produtos[$item]['detalhes'];
                echo $produtos[$item]['img'];
                ?>
                 </div>
           </div>    
     <form method="post" action="produtos.php">
               <div class="row">
                <div class="col col-md-12 mx-auto py-2 bg-primary text-center text-light">    <button class="btn btn-dark" type="submit" >Adicionar ao Carrinho </button>
                    <button class="btn btn-dark" type="submit">Cancelar</button>
                   </div></div></form>
    
</body>
</html>