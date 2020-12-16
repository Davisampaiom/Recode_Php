<?php 
     
  $servername = "192.168.1.102";
  $username = "admin";
  $password = "ds91196002";
  $dbname = "fseletro";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
     ?>



<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack Eletro</title>
    <link href="./style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script  src="./index.js" type="text/javascript"></script>
</head>

<body>

<!-- Inicio do menu-->
<?php 
     include('menu.html');
     ?>
<!-- fim do menu-->
    <header>
        <h2 class="d-flex justify-content-center align-items-center mt-5 mb-5">
            Produtos
        </h2>
    </header>
    <hr><br>
    <div class="container-fluid d-inline-flex">
        <div class="categorias">
            <h3>Categorias</h3>
            <ul class="nav flex-column">
            <li class="nav-item"> <button class="btn btn-light w-100  font-weight-bold" onclick="allCategories()">Todos (12) </button></li>
            <li class="nav-item"> <button class="btn btn-light w-100  font-weight-bold" onclick="filterCategory('geladeira')">Geladeiras (3) </button></li>
            <li class="nav-item"> <button class="btn btn-light w-100  font-weight-bold" onclick="filterCategory('fogao')">Fogão (2) </button></li>
            <li class="nav-item"> <button class="btn btn-light w-100  font-weight-bold" onclick="filterCategory('lavadoraDeRoupas')">Lavadoras (2) </button></li>
            <li class="nav-item"> <button class="btn btn-light w-100  font-weight-bold" onclick="filterCategory('microondas')">Microondas (3) </button></li>
            <li class="nav-item"> <button class="btn btn-light w-100  font-weight-bold" onclick="filterCategory('lavaLoucas')">Lava-Loucas (2) </button></li>
            </ul>
</div>  
  


        <div class="  d-sm-inline-flex flex-wrap mr-3">
        <?php

        $sql = "SELECT * FROM produtos";
        $result = $conn->query($sql);
        
        
        if($result->num_rows > 0 ){
            while($rows = $result -> fetch_assoc()){
                  
       ?>
    <div class="box_produtos d-flex flex-column border border-2 " id="<?php echo $rows["categoria"]; ?> ">
                <img src="<?php echo $rows["imagem"]; ?>" 
                width=140px  onclick="destaque(this)">
                <br>
                <p class="">
                <?php echo $rows["descricao"]; ?></p>
                
                <p class=""><strike>R$<?php echo $rows["preco"]; ?></strike></p>
                <p class="text-danger">R$ <?php echo $rows["preco_venda"]; ?></p>
            </div>

           
           <?php
            }
        } else{
            echo "Nenhum produto cadastrado!";
        }
        
        ?>

        
           
        </div>


        </div>

    </div>
    <br><br><br>
    <br><br><br>
    <br><br><br>

    <!-- rodape -->
    <?php 
     include('footer.html');
     ?>
    <!-- rodape -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
  

</body>

</html>