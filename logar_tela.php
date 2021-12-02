<?php 
session_start();


?>
<html >
<head>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_login.css">
    <title>Document</title>

</head>
<body>
<?php 
  if(isset($_SESSION['kiabo'])):

    echo $_SESSION['kiabo'];
    unset($_SESSION['kiabo']);

  endif;
  ?>
    <nav class="quadrado"   >
        <h3 style="text-align: center; position: absolute;margin-top: 60px; margin-left: 143;">Login</h3>
        <img src="rede_social//LOGAR2 - Cópia.png" />
        <div class="cv">
<form action="logando.php" method="POST">
          <div class="form-group">
            <div class="col-md-12 ">
        <p>Nome do Usuário</p>
        <input type="text"  class="form-control" size="30" maxlength="15" placeholder="Nome do Usuário" name="nome" required >
    </div>
</div>
<div class="form-group">
    <div class="col-md-12">
        <p>Senha do Usuário</p>
        <input type="password" class="form-control" placeholder="Senha do Usuário" name="senha" required  > <br>
        <a href=""><input type="submit" class="btn btn-primary " value="Logar Usuário" ></a>
    </nav>
</nav>
</nav>
</form>
</div>
</body>
</html>