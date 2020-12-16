<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas lojas - Full Stack Eletro</title>
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

   <div class="container-fluid ml-2 mr-2">
   <header class="container-fluid d-flex justify-content-center align-items-center mt-5 mb-5 ">
        <h2>
            Nossas lojas
       </h2>
    </header>
    
    <hr>
    <br><br><br><br>
    
        <section class="d-flex justify-content-center align-items-center ">
                <div class="justify-content-center p-5 border border-2 rounded-3">
                    <h3>Rio de Janeiro</h3>
                    <p>Av Presidente Vargas,500</p>
                    <p>10 &ordm; andar</p>
                    <p>Centro</p>
                    <p>(21) 3333-3333</p>
                </div>
                <div class="end justify-content-center  p-5 border border-2 rounded-3">
                    <h3>São Paulo    </h3>
                    <p>Av Oscar Marinho , 985</p>
                    <p>3 &ordm; andar</p>
                    <p>Jardins</p>
                    <p>(11) 4444-4444</p>
                </div>
                <div class="end justify-content-center p-5 border border-2 rounded-3">
                    <h3>Santa Catarina</h3><br>
                    <p>Rua Major &aacute;villa, 370</p>
                    <p>Vila Mariana</p>
                    <p>(47) 5555-5555</p><br>
                </div>
    
        </section>
   </div>
             

 
<br><br><br><br><br><br>
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