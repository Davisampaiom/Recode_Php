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
     
     if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['municipio'])&& isset($_POST['estado'])
     && isset($_POST['produto']) && isset($_POST['msg'])){
         $nome = $_POST['nome'];
         $endereco = $_POST['endereco'];
         $municipio = $_POST['municipio'];
         $estado = $_POST['estado'];
         $produto = $_POST['produto'];
         $msg = $_POST['msg'];

         $sql = "INSERT INTO pedido(nome,endereco,municipio,estado,produto, msg) VALUES 
         ('$nome','$endereco','$municipio','$estado','$produto','$msg')";
         $result = $conn->query($sql); 
     }
     

     


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido - Full Stack Eletro</title>
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="index.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>

<!-- Inicio do menu-->
<?php 
     include('menu.html');
     ?>
<!-- fim do menu-->
<div class="container-fluid">
<header class=" justify-content-center align-items-center mt-5 mb-5 " >
    <center> <h2>Faça seu Pedido</h2></center>
</header>
   
    
    <hr>
    <br><br>

 
 <form method="post" action="" >
     <div class="form-group mb-4">
        <label >Nome: </label>
        <input type="text" class="form-control mb-2 w-50 " name="nome"  >
        <label>Endereco: </label>
        <input type="text" class="form-control mb-2 w-50" name="endereco"  >
        <label>Municipio: </label>
        <input type="text" class="form-control mb-2 w-50" name="municipio"  >
        <label>Estado: </label>
        <input type="text" class="form-control mb-2 w-50" name="estado"  >
        <label>Produto: </label>
        <input type="text" class="form-control mb-2 w-50" name="produto"  >
        <label>Mensagem: </label>
        <textarea id="Mensagem" class="form-control w-50 " name="msg" ></textarea><br>
        
        <button class="btn btn-danger" type="submit" name="submit" value="Enviar">Enviar</button>
        </div>
    </form>
 


    <table>
        <tr>
            <td>
                <img src="./img/email.png" width="7%" >
                contato@fullstackeletro.com</font>
            </td>
            <td>
                <img src="./img/tel.jpg" width="7%">
                (11) 99999-9999</font>
            </td>
        </tr>

    </table>
    <br><br>
    

</div>


    <br>
 <!-- rodape -->
     <?php 
     include('footer.html');
     ?>
 <!-- rodape -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

       
</body>
</html>